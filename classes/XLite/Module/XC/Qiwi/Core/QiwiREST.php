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

namespace XLite\Module\XC\Qiwi\Core;

use XLite\Core\HTTP\Request;

/**
 * Qiwi REST API v2 client
 */
class QiwiREST extends \XLite\Base
{
    /**
     * REST API v2 endpoint
     */
    const API_ENDPOINT = 'https://w.qiwi.com/api/v2/prv/';

    /**
     * Possible callback authorization methods
     */
    const AUTH_METHOD_BASIC = 'basic';
    const AUTH_METHOD_SIGNATURE = 'signature';

    /**
     * @var string REST API login
     */
    private $login;

    /**
     * @var string REST API password
     */
    private $password;

    /**
     * @var string REST API secret key
     */
    private $secretKey;

    /**
     * Initializes API client
     *
     * @param $login string API login
     * @param $password string API password
     * @param $secretKey string API secret key
     */
    public function __construct($login, $password, $secretKey)
    {
        $this->login = $login;
        $this->password = $password;
        $this->secretKey = $secretKey;
    }

    /**
     * Returns specific bill info
     *
     * @param integer $billId Bill identifier
     *
     * @return \stdClass
     */
    public function getBill($billId)
    {
        return $this->makeRequest('/bills/' . $billId);
    }

    /**
     * Creates a bill
     *
     * @param $billId string New bill identifier
     * @param $qiwiPhoneNumber string Payer phone number
     * @param $amount string Amount to pay
     * @param $currency string ISO 4217 currency code
     * @param $lifetime integer Bill lifetime (in hours)
     * @param $orderNumber string reference order ID
     *
     * @return \stdClass
     */
    public function createBill($billId, $qiwiPhoneNumber, $amount, $currency, $lifetime, $orderNumber)
    {
        $orderComment = \XLite\Core\Translation::lbl('Order X', array('id' => $orderNumber));

        $body = array(
            'user' => 'tel:' . $qiwiPhoneNumber,
            'amount' => $amount,
            'ccy' => $currency,
            'comment' => $orderComment,
            'lifetime' => $lifetime,
        );

        return $this->makeRequest('/bills/' . $billId, 'PUT', $body);
    }

    /**
     * Authenticates Qiwi callback
     *
     * @param $authMethod string Authorization method
     *
     * @return boolean
     */
    public function isAuthorized($authMethod)
    {
        if (static::AUTH_METHOD_BASIC == $authMethod) {
            $user = !empty($_SERVER['PHP_AUTH_USER']) ? $_SERVER['PHP_AUTH_USER'] : null;
            $password = !empty($_SERVER['PHP_AUTH_PW']) ? $_SERVER['PHP_AUTH_PW'] : null;

            $authorized = ($user === $this->login && $password === $this->secretKey);

        } else {
            $signature = $_SERVER['HTTP_X_API_SIGNATURE'];

            $dataToSign = \XLite\Core\Request::getInstance()->getPostData();
            ksort($dataToSign);

            $calcSignature = base64_encode(hash_hmac('sha1', implode('|', $dataToSign), $this->secretKey, true));

            $authorized = strcasecmp($signature, $calcSignature) == 0;
        }

        return $authorized;
    }

    /**
     * Makes a Qiwi API v2 request
     *
     * @param $query string Query string relative to API endpoint
     * @param string $verb string Http verb
     * @param null $body array request body
     *
     * @return mixed
     */
    protected function makeRequest($query, $verb = 'GET', $body = null)
    {
        $request = new Request(static::API_ENDPOINT . $this->login . $query);

        $request->verb = $verb;

        if ($body !== null) {
            $request->body = $body;
        }

        $request->setHeader('Accept', 'application/json');
        $request->setHeader('Authorization', 'Basic ' . base64_encode($this->login . ':' . $this->password));

        return json_decode($request->sendRequest());
    }
}
