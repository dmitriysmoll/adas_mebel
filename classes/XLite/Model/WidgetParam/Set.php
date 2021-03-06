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
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

namespace XLite\Model\WidgetParam;

/**
 * Set
 */
class Set extends \XLite\Model\WidgetParam\AWidgetParam
{
    /**
     * Param type
     *
     * @var string
     */
    protected $type = 'list';

    /**
     * Options
     *
     * @var array
     */
    protected $options = null;

    /**
     * Constructor
     *
     * @param mixed $label     Param label (text)
     * @param mixed $value     Default value OPTIONAL
     * @param mixed $isSetting Display this setting in CMS or not OPTIONAL
     * @param array $options   Options list OPTIONAL
     *
     * @return void
     */
    public function __construct($label, $value = null, $isSetting = false, array $options = array())
    {
        parent::__construct($label, $value, $isSetting);

        // TODO - check if there are more convinient ways to extend this class
        if (!isset($this->options)) {
            $this->setOptions($options);
        }
    }

    /**
     * Set options 
     * 
     * @param array $options Options
     *  
     * @return void
     */
    public function setOptions(array $options)
    {
        $this->options = $options;
    }

    /**
     * Get options 
     * 
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Return list of conditions to check
     *
     * @param mixed $value Value to validate
     *
     * @return void
     */
    protected function getValidaionSchema($value)
    {
        return array(
            array(
                self::ATTR_CONDITION => !isset($this->options[$value]),
                self::ATTR_MESSAGE   => ' unallowed param value - "' . $value . '"',
            ),
        );
    }
}
