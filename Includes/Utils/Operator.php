<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * X-Cart
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the software license agreement
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.x-cart.com/license-agreement.html
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to licensing@x-cart.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not modify this file if you wish to upgrade X-Cart to newer versions
 * in the future. If you wish to customize X-Cart for your needs please
 * refer to http://www.x-cart.com/ for more information.
 *
 * @category  X-Cart 5
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2014 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

namespace Includes\Utils;

/**
 * Operator
 *
 * @package    XLite
 */
abstract class Operator extends \Includes\Utils\AUtils
{
    /**
     * Return length of the "dummy" buffer for flush
     *
     * @return int
     */
    protected static function getDummyBufferLength()
    {
        return 4096;
    }

    /**
     * Perform the "flush" itself
     *
     * @return void
     */
    protected static function flushBuffers()
    {
        @ob_flush();
        flush();
    }

    /**
     * Wrap message into some HTML tags (to fast output)
     *
     * @param string $message  Message to prepare
     * @param string $jsOutput JS output
     *
     * @return string
     */
    protected static function getJSMessage($message, $jsOutput)
    {
        return '<noscript>' . $message . '</noscript>'
             . '<script type="text/javascript">' . $jsOutput . '</script>';
    }


    /**
     * Redirect
     *
     * @param string $location URL
     * @param int    $code     operation code
     *
     * @return void
     */
    public static function redirect($location, $code = 302)
    {
        $location = \Includes\Utils\Converter::removeCRLF($location);

        if ('cli' !== PHP_SAPI) {

            if (headers_sent()) {
                $message  = '<a href="' . $location . '">Click here to redirect</a>';
                $jsOutput = 'self.location = \'' . $location . '\';';

                static::flush($message, true, $jsOutput);

            } else {
                header('Location: ' . $location, true, $code);
            }
        }

        exit (0);
    }

    /**
     * Refresh current page
     *
     * @param array $params Additional parameters OPTIONAL
     *
     * @return void
     */
    public static function refresh($params = array())
    {
        // Get current URL
        $url = \Includes\Utils\URLManager::getSelfURI();

        // Prepare additional URL parameters string
        $addParams = '';
        foreach ($params as $k => $v) {
            $addParams .= sprintf('&%s=%s', $k, $v);
        }

        // Remove unique param and old additional parameters to avoid duplication them
        $url = preg_replace('/(&|\?)(\d+\.\d+)' . preg_quote($addParams). '$/', '', $url);

        // Add unique param and additional parameters to the URL
        $url .= (false !== strpos($url, '?') ? '&' : '?') . microtime(true) . $addParams;

        // Do redirection
        static::redirect($url);
    }

    /**
     * Echo message and flush output
     *
     * @param string  $message    Text to display
     * @param boolean $dummyFlush Output extra spaces or not OPTIONAL
     * @param string  $jsOutput   Flag to quick output OPTIONAL
     *
     * @return void
     */
    public static function flush($message, $dummyFlush = false, $jsOutput = null)
    {
        if ('cli' !== PHP_SAPI) {

            // Send extra whitespace before flushing
            if ($dummyFlush) {
                static::pureEcho(str_repeat(' ', static::getDummyBufferLength()));
            }

            // Wrap message into the "<script>" tag
            if (isset($jsOutput)) {
                $message = static::getJSMessage($message, $jsOutput);
            }
        }

        // Print message
        static::pureEcho($message);

        static::flushBuffers();
    }

    /**
     * Echoes the message if it is not in AJAX mode
     *
     * @param type $message
     *
     * @return void
     */
    public static function pureEcho($message)
    {
        echo ($message);
    }

    /**
     * Wrapper to message quick display
     *
     * @param string  $message    Message text
     * @param boolean $addNewline Flag OPTIONAL
     * @param boolean $addJS      Add message in javascript wrapper OPTIONAL
     *
     * @return void
     */
    public static function showMessage($message, $addNewline = true, $addJS = true)
    {
        static::flush(
            $message,
            true,
            $addJS ? 'document.write(\'' . $message . '\');' : null);

        if ($addNewline) {
            static::flush(LC_EOL);
        }
    }

    /**
     * Check - is AJAX request or not
     *
     * @return boolean
     */
    public static function isAJAX()
    {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
    }

    /**
     * Set custom value for the "max_execution_time" INI setting, and execute some function
     *
     * @param int   $time     time (in seconds) to set
     * @param mixed $callback function to execute
     * @param array $args     call arguments
     *
     * @return mixed
     */
    public static function executeWithCustomMaxExecTime($time, $callback, array $args = array())
    {
        $savedValue = @ini_get('max_execution_time');
        @set_time_limit($time);

        $result = call_user_func_array($callback, $args);

        if (!empty($savedValue)) {
            @set_time_limit($savedValue);
        }

        return $result;
    }

    /**
     * Check if class is already declared.
     * NOTE: this function does not use autoloader
     *
     * @param string $name Class name
     *
     * @return boolean
     */
    public static function checkIfClassExists($name)
    {
        $result = class_exists($name, false);

        if (!$result) {
            $result = \Includes\Utils\FileManager::isFileReadable(
                 \Includes\Autoloader::getLCAutoloadDir() . \Includes\Utils\Converter::getClassFile($name)
            );
        }

        return $result;
    }

    /**
     * Check if class is an LC one
     *
     * @param string $name Class name
     *
     * @return boolean
     */
    public static function checkIfLCClass($name)
    {
        return 0 === strpos(\Includes\Utils\Converter::prepareClassName($name), LC_NAMESPACE);
    }

    /**
     * Save service YAML
     *
     * @param string $path File path
     * @param array  $data Data
     *
     * @return integer
     */
    public static function saveServiceYAML($path, array $data)
    {
        return \Includes\Utils\FileManager::write(
            $path,
            static::getServiceHeader() . \Symfony\Component\Yaml\Yaml::dump($data)
        );
    }

    /**
     * Load service YAML
     *
     * @param string $path File path
     *
     * @return void
     */
    public static function loadServiceYAML($path)
    {
        $data = null;

        if (\Includes\Utils\FileManager::isFile($path)) {
            $data = \Symfony\Component\Yaml\Yaml::parse($path);
        }

        return $data;
    }

    /**
     * Get data storage service header
     *
     * @return string
     */
    public static function getServiceHeader()
    {
        return '# <' . '?php if (!defined(\'LC_DS\')) { die(); } ?' . '>' . PHP_EOL . PHP_EOL;
    }

}
