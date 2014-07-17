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
 namespace XLite\Module\CDev\XPaymentsConnector\Controller\Customer;

/**
 * Saved credit cards 
 *
 */
class AddNewCard extends \XLite\Controller\Customer\ACustomer
{

    /**
     * Return the current page title (for the content area)
     *
     * @return string
     */
    public function getTitle()
    {
        return 'Add new credit card';
    }

    /**
     * Check whether the title is to be displayed in the content area
     *
     * @return boolean
     */
    public function isTitleVisible()
    {
        return \XLite\Core\Request::getInstance()->widget;
    }

    /**
     * Check if current page is accessible
     *
     * @return boolean
     */
    public function checkAccess()
    {
        return parent::checkAccess() && \XLite\Core\Auth::getInstance()->isLogged();
    }

    /**
     * Common method to determine current location
     *
     * @return string
     */
    protected function getLocation()
    {
        return 'Add new credit card';
    }

    /**
     * Add part to the location nodes list
     *
     * @return void
     */
    protected function addBaseLocation()
    {
        parent::addBaseLocation();

        $this->addLocationNode('My account');
        $this->addLocationNode('Saved credit cards');
    }

    /**
     * Get substep number
     *
     * @param string $name Substep name
     *
     * @return integer
     */
    public function getSubstepNumber($name)
    {
        switch ($name) {
            case 'shippingAddress':
                $result = 1;
                break;

            case 'billingAddress':
                $result = 2;
                break;

            case 'cardForm':
                $result = 3;
                break;

            default:
                $result = 1;
        }

        return $result;
    }


    /**
     * Check - display Address book button or not
     *
     * @return boolean
     */
    public function isDisplayAddressButton()
    {
        return true;
//            && 0 < count($this->getCart()->getProfile()->getAddresses());
    }

    /**
     * Check - display Address book button or not
     *
     * @return boolean
     */
    public function getIframeUrl()
    {

        $config = \XLite\Core\Config::getInstance()->CDev->XPaymentsConnector;

        $cart = \XLite\Model\Cart::getInstance(false);
        $cart->setTotal(0.01);

        $cart->setProfile($this->getProfile());

        $client = \XLite\Module\CDev\XPaymentsConnector\Core\XPaymentsClient::getInstance();

        // Prepare cart
        $preparedCart = $client->prepareCart($cart, null, $forceAuth);

        if (!$cart || !$preparedCart) {

            die('bad cart');

        } else {

            $xpcBackReference = 'bugaga';

            $returnUrl = \XLite::getInstance()->getShopUrl(
                \XLite\Core\Converter::buildUrl(
                    'add_new_card',
                    'return',
                    array('xpcBackReference' => $xpcBackReference)
                )
            );

            $callbackUrl = \XLite::getInstance()->getShopUrl(
                \XLite\Core\Converter::buildUrl(
                    'add_new_card',
                    'callback',
                    array('xpcBackReference' => $xpcBackReference)
                )
            );

            // Data to send to X-Payments
            $data = array(
                'confId'      => '1', //intval($paymentMethod->getSetting('id')),
                'refId'       => $xpcBackReference,
                'cart'        => $preparedCart,
                'language'    => 'en',
                'returnUrl'   => $returnUrl,
                'callbackUrl' => $callbackUrl,
            );

            // API v1.3
            if ('1.3' == \XLite\Core\Config::getInstance()->CDev->XPaymentsConnector->xpc_api_version) {
                $data13 = array();

                if (
                    method_exists('\XLite\Core\Request', 'isMobileDevice')
                    && \XLite\Core\Request::isMobileDevice()
                ) {
                    $data13['template'] = 'default';
                }

                $data13['saveCard'] = 'Y';

                $data += $data13;
            }

            list($status, $response) = $client->getApiRequest(
                'payment',
                'init',
                $data,
                $client->getRequestInitSchema()
            );

            return $config->xpc_xpayments_url . '/payment.php?target=main&token=' . $response['token'];

        }
    }

    /**
     * Get selected payment method
     *
     * @return void
     */
    public function getPaymentMethod()
    {
        return \XLite\Core\Session::getInstance()->add_new_card_payment_method;
    }

    /**
     * Get list of payment methods
     *
     * @return void
     */
    public function getPaymentMethodsList()
    {
        return \XLite\Core\Database::getRepo('XLite\Model\Payment\Method')->findAllActive();
    }

    /**
     * Get list of addresses
     *
     * @return void
     */
    public function getAddressId()
    {
        return \XLite\Core\Session::getInstance()->add_new_card_address;
    }

    /**
     * Get list of addresses
     *
     * @return string
     */
    public function getAddressOption(\XLite\Model\Address $address)
    {
        $fields = array(
            'firstname',
            'lastname',
            'zipcode',
            'street',
            'city',
        );

        $result = array();

        foreach ($fields as $field) {
            $result[] = $address->getFieldValue($field)->getValue();
        }

        return implode(' ', $result); 
    }

    /**
     * Get list of addresses 
     *
     * @return void
     */
    public function getAddressesList()
    {
        $list = $this->getProfile()->getAddresses()->toArray();
        foreach ($list as $i => $address) {
            if ($address->getIsWork()) {
                unset($list[$i]);
            }
        }

        return array_values($list);
    }

    /**
     * Update default credit card
     *
     * @return void
     */
    protected function doActionReturn()
    {
        $request = \XLite\Core\Request::getInstance();

        var_dump($request);

        die();

    }

    /**
     * Update default credit card
     *
     * @return void
     */
    protected function doActionCallback()
    {
        $request = \XLite\Core\Request::getInstance();

        var_dump($request);

        die();

    }

    /**
     * Update default credit card
     *
     * @return void
     */
    protected function doActionSetPaymentMethod()
    {
        $paymentMethodId = intval(\XLite\Core\Request::getInstance()->payment_method);

        \XLite\Core\Session::getInstance()->add_new_card_payment_method = $paymentMethodId;
    }

    /**
     * Update default credit card
     *
     * @return void
     */
    protected function doActionSetAddress()
    {
        $addressId = intval(\XLite\Core\Request::getInstance()->address);

        \XLite\Core\Session::getInstance()->add_new_card_address = $addressId;
    }

}
