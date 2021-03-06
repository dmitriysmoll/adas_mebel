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

namespace XLite\View\Payment;

/**
 * Payment method
 *
 * @ListChild (list="admin.center", zone="admin")
 */
class Method extends \XLite\View\Dialog
{
    /**
     * Return list of targets allowed for this widget
     *
     * @return array
     */
    public static function getAllowedTargets()
    {
        $result = parent::getAllowedTargets();
        $result[] = 'payment_method';

        return $result;
    }

    /**
     * Check widget visible
     *
     * @return boolean
     */
    public function isVisible()
    {
        return parent::isVisible()
            && $this->getPaymentMethod()
            && $this->getPaymentMethod()->getProcessor()
            && $this->getPaymentMethod()->getProcessor()->getSettingsWidget();
    }

    /**
     * Get payment method
     *
     * @return \XLite\Model\Payment\Metho
     */
    public function getPaymentMethod()
    {
        return \XLite\Core\Database::getRepo('XLite\Model\Payment\Method')
            ->find(\XLite\Core\Request::getInstance()->method_id);
    }

    /**
     * Check - is settings widget is widget class or not
     *
     * @return boolean
     */
    public function isWidgetSettings()
    {
        $widget = $this->getPaymentMethod()->getProcessor()->getSettingsWidget();

        return 0 === strpos($widget, '\XLite\View\\')
            || 0 === strpos($widget, '\XLite\Module\\');
    }


    /**
     * Return templates directory name
     *
     * @return string
     */
    protected function getDir()
    {
        return 'payment/method';
    }
}
