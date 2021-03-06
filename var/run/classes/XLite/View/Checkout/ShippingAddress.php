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

namespace XLite\View\Checkout;

/**
 * Shipping address block
 */
class ShippingAddress extends \XLite\View\Checkout\AAddressBlock
{
    /**
     * Get JS files 
     * 
     * @return array
     */
    public function getJSFiles()
    {
        $list = parent::getJSFiles();

        $list[] = 'checkout/steps/shipping/parts/address.shipping.js';

        return $list;
    }

    /**
     * Check - email field is visible or not
     *
     * @return boolean
     */
    protected function isEmailVisible()
    {
        return true;
    }

    /**
     * Check - password field is visible or not
     *
     * @return boolean
     */
    protected function isPasswordVisible()
    {
        return $this->isAnonymous();
    }

    /**
     * Get field name 
     * 
     * @param string $name File short name
     *  
     * @return string
     */
    protected function getFieldFullName($name)
    {
        return in_array($name, array('email', 'password'))
            ? $name
            : ('shippingAddress[' . $name . ']');
    }

    /**
     * Get address info model
     *
     * @return \XLite\Model\Address
     */
    protected function getAddressInfo()
    {
        $profile = $this->getCart()->getProfile();

        return $profile ? $profile->getShippingAddress() : null;
    }

    /**
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'checkout/steps/shipping/parts/shippingAddress.tpl';
    }

    /**
     * Check - 'Save as new' checkbox checked or not
     * 
     * @return boolean
     */
    protected function isSaveAsNewChecked()
    {
        return $this->getAddressInfo() && !$this->getAddressInfo()->getIsWork();
    }
}
