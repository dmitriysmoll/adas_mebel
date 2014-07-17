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

namespace XLite\Module\XC\ProductFilter\Controller\Admin;

/**
 * Category 
 *
 */
class Category extends \XLite\Controller\Admin\Category implements \XLite\Base\IDecorator
{
    /**
     * Get posted data
     *
     * @param string $field Name of the field to retrieve OPTIONAL
     *
     * @return mixed
     */
    protected function getPostedData($field = null)
    {
        $result = parent::getPostedData($field);

        if (!isset($field) || 'productClasses' === $field) {
            if (isset($field)) {
                $ids = $result;

            } else if (isset($result['productClasses'])) {
                $ids = $result['productClasses'];

            } else {
                $ids = array();
            }

            $productClasses = $ids
                ? \XLite\Core\Database::getRepo('\XLite\Model\ProductClass')->findByIds($ids)
                : array();

            if (isset($field)) {
                $result = $productClasses;

            } else {
                $result['productClasses'] = $productClasses;
            }
        }

        return $result;
    }
}
