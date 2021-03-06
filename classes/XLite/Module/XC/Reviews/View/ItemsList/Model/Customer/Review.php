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

namespace XLite\Module\XC\Reviews\View\ItemsList\Model\Customer;

/**
 * Review details
 *
 */
class Review extends \XLite\View\ItemsList\AItemsList
{
    /**
     * Widget param names
     */
    const PARAM_PRODUCT_ID = 'product_id';
    const PARAM_CATEGORY_ID = 'category_id';
    const PARAM_SEARCH_ADDITION_DATE = 'additionDate';
    const PARAM_SEARCH_STATUS = 'status';
    const PARAM_SEARCH_REVIEWER_NAME = 'reviewerName';
    const PARAM_SEARCH_EMAIL = 'email';
    const PARAM_SEARCH_REVIEW = 'review';
    const PARAM_SEARCH_KEYWORDS = 'keywords';
    const PARAM_SEARCH_RATING = 'rating';
    const PARAM_SEARCH_PRODUCT = 'product';

    const WIDGET_TARGET = 'product_reviews';

    /**
     * Return list of targets allowed for this widget
     *
     * @return array
     */
    public static function getAllowedTargets()
    {
        $result = parent::getAllowedTargets();
        $result[] = static::getWidgetTarget();

        return $result;
    }

    /**
     * Return search parameters.
     *
     * @return array
     */
    static public function getSearchParams()
    {
        return array(
            \XLite\Module\XC\Reviews\Model\Repo\Review::SEARCH_ADDITION_DATE => static::PARAM_SEARCH_ADDITION_DATE,
            \XLite\Module\XC\Reviews\Model\Repo\Review::SEARCH_STATUS => static::PARAM_SEARCH_STATUS,
            \XLite\Module\XC\Reviews\Model\Repo\Review::SEARCH_PRODUCT => static::PARAM_SEARCH_PRODUCT,
            \XLite\Module\XC\Reviews\Model\Repo\Review::SEARCH_KEYWORDS => static::PARAM_SEARCH_KEYWORDS,
            \XLite\Module\XC\Reviews\Model\Repo\Review::SEARCH_RATING => static::PARAM_SEARCH_RATING,
        );
    }

    /**
     * Return target to retrive this widget from AJAX
     *
     * @return string
     */
    protected static function getWidgetTarget()
    {
        return self::WIDGET_TARGET;
    }

    /**
     * Get a list of CSS files required to display the widget properly
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list = parent::getCSSFiles();

        $list[] = 'modules/XC/Reviews/reviews_page/style.css';
        $list[] = 'modules/XC/Reviews/vote_bar/vote_bar.css';

        return $list;
    }

    /**
     * Get a list of JavaScript files required to display the widget properly
     *
     * @return array
     */
    public function getJSFiles()
    {
        $list = parent::getJSFiles();

        $list[] = self::getDir() . LC_DS . self::getPageBodyDIr() . LC_DS . 'reviews_list.js';

        return $list;
    }

    /**
     * Returns CSS classes for the container element
     *
     * @return string
     */
    public function getListCSSClasses()
    {
        return parent::getListCSSClasses() . ' product-reviews';
    }

    /**
     * Return product id
     *
     * @return integer
     */
    public function getProductId()
    {
        $productId = \XLite\Core\Request::getInstance()->product_id;

        if (empty($productId)) {
            $cellName = \XLite\Module\XC\Reviews\View\ItemsList\Model\Customer\Review::getSessionCellName();
            $cell = (array)\XLite\Core\Session::getInstance()->$cellName;
            $productId = $cell['product_id'];
        }

        return $productId;
    }

    /**
     * Set widget params
     *
     * @param array $params Handler params
     *
     * @return void
     */
    public function setWidgetParams(array $params)
    {
        parent::setWidgetParams($params);
    }

    // {{{ Search

    /**
     * Define so called "request" parameters
     *
     * @return void
     */
    protected function defineRequestParams()
    {
        parent::defineRequestParams();

        $this->requestParams[] = self::PARAM_PRODUCT_ID;
        $this->requestParams[] = self::PARAM_CATEGORY_ID;
    }

    /**
     * Return params list to use for search
     *
     * @return \XLite\Core\CommonCell
     */
    protected function getSearchCondition()
    {
        $result = parent::getSearchCondition();

        foreach (static::getSearchParams() as $modelParam => $requestParam) {
            $paramValue = $this->getParam($requestParam);

            if (static::PARAM_SEARCH_ADDITION_DATE == $requestParam && is_array($paramValue)) {
                foreach ($paramValue as $i => $date) {
                    if (is_string($date) && false !== strtotime($date)) {
                        $paramValue[$i] = strtotime($date);
                    }
                }
            }

            if ('' !== $paramValue && 0 !== $paramValue) {
                $result->$modelParam = $paramValue;
            }
        }

        $result->{\XLite\Module\XC\Reviews\Model\Repo\Review::SEARCH_ORDERBY} = array('r.additionDate', 'DESC');

        $profile = \XLite\Core\Auth::getInstance()->getProfile() ? : null;
        $result->{\XLite\Module\XC\Reviews\Model\Repo\Review::SEARCH_ZONE}
            = array(\XLite\Module\XC\Reviews\Model\Repo\Review::SEARCH_ZONE_CUSTOMER, $profile);

        $result->{\XLite\Module\XC\Reviews\Model\Repo\Review::SEARCH_PRODUCT} = $this->getProduct();
        $result->{\XLite\Module\XC\Reviews\Model\Repo\Review::SEARCH_TYPE}
            = \XLite\Module\XC\Reviews\Model\Repo\Review::SEARCH_TYPE_REVIEWS_ONLY;

        return $result;
    }

    // }}}

    /**
     * Return true if review is approved
     *
     * @return boolean
     */
    protected function isApproved(\XLite\Module\XC\Reviews\Model\Review $entity)
    {
        return $entity->getStatus() == \XLite\Module\XC\Reviews\Model\Review::STATUS_APPROVED;
    }

    /**
     * Return true if review is in pending status
     *
     * @return boolean
     */
    protected function isOnModeration(\XLite\Module\XC\Reviews\Model\Review $entity)
    {
        return (
            !$this->isApproved($entity)
            && (true == \XLite\Core\Config::getInstance()->XC->Reviews->disablePendingReviews)
        );
    }

    /**
     * Return reviews list
     *
     * @param \XLite\Core\CommonCell $cnd       Search condition
     * @param boolean                $countOnly Return items list or only its size OPTIONAL
     *
     * @return array|void
     */
    protected function getData(\XLite\Core\CommonCell $cnd, $countOnly = false)
    {
        return \XLite\Core\Database::getRepo('\XLite\Module\XC\Reviews\Model\Review')->search($cnd, $countOnly);
    }

    /**
     * Return current product's category id
     *
     * @return integer
     */
    protected function getCategoryId()
    {
        $categoryId = null;

        if (\XLite\Core\Request::getInstance()->category_id) {
            $categoryId = \XLite\Core\Request::getInstance()->category_id;
        } elseif ($this->getProduct()) {
            $categoryId = $this->getProduct()->getCategoryId();
        }

        return $categoryId;
    }

    /**
     * Get product
     *
     * @return \XLite\Model\Product
     */
    protected function getProduct()
    {
        return \XLite\Core\Database::getRepo('XLite\Model\Product')->find($this->getProductId());
    }

    /**
     * Define widget templates directory
     *
     * @return string
     */
    protected function getDir()
    {
        return 'modules/XC/Reviews';
    }

    /**
     * Define page body templates directory
     *
     * @return string
     */
    protected function getPageBodyDir()
    {
        return 'reviews_page';
    }

    /**
     * Define page body template
     *
     * @return string
     */
    protected function getPageBodyFile()
    {
         return 'reviews.tpl';
    }

    /**
     * Get CSS class
     *
     * @return string
     */
    protected function getClass(\XLite\Module\XC\Reviews\Model\Review $entity)
    {
        return (
            $this->isApproved($entity)
            || (false == \XLite\Core\Config::getInstance()->XC->Reviews->disablePendingReviews)
        )
            ? ''
            : ' pending';
    }

    /**
     * Define if review is added by current user
     *
     * @return boolean
     */
    protected function isOwnReview(\XLite\Module\XC\Reviews\Model\Review $entity)
    {
        $profile = \XLite\Core\Auth::getInstance()->getProfile();

        $result = false;

        if ($profile) {
            $result = ($entity->getProfile() == $profile);
        } else {
            $reviewIds = \XLite\Core\Session::getInstance()->reviewIds;
            if (is_array($reviewIds)) {
                $result = in_array($entity->getId(), $reviewIds);
            }
        }

        return $result;
    }

    /**
     * Check if pager is visible
     *
     * @return boolean
     */
    protected function isPagerVisible()
    {
        return 0 < $this->getItemsCount();
    }

    /**
     * Get empty list template name
     *
     * @return string
     */
    protected function getEmptyListTemplate()
    {
        return $this->getDir() . LC_DS . $this->getPageBodyDir() . '/empty_reviews_list.tpl';
    }

    /**
     * Get widget parameters
     *
     * @return array
     */
    protected function getWidgetParameters()
    {
        $list = parent::getWidgetParameters();
        $list[self::PARAM_CATEGORY_ID] = $this->getCategoryId();
        $list[self::PARAM_PRODUCT_ID] = $this->getProductId();

        return $list;
    }

    /**
     * Define widget parameters
     *
     * @return void
     */
    protected function defineWidgetParams()
    {
        parent::defineWidgetParams();

        $this->widgetParams += array(
            self::PARAM_CATEGORY_ID => new \XLite\Model\WidgetParam\ObjectId\Category(
                'Category ID',
                $this->getCategoryId()
            ),
            self::PARAM_PRODUCT_ID => new \XLite\Model\WidgetParam\ObjectId\Product(
                'Product ID',
                $this->getProductId()
            ),
        );

    }

    /**
     * Check if widget is visible
     *
     * @return boolean
     */
    protected function isVisible()
    {
        return true;
    }

    /**
     * Get JS handler class name (used for pagination)
     *
     * @return string
     */
    protected function getJSHandlerClassName()
    {
        return 'ReviewsList';
    }

    /**
     * Define repository name
     *
     * @return string
     */
    protected function defineRepositoryName()
    {
        return 'XLite\Module\XC\Reviews\Model\Review';
    }

    /**
     * Get create entity URL
     *
     * @return string
     */
    protected function getCreateURL()
    {
        return \XLite\Core\Converter::buildUrl('review');
    }

    /**
     * Get container class
     *
     * @return string
     */
    protected function getContainerClass()
    {
        return parent::getContainerClass() . ' reviews';
    }

    /**
     * Return class name for the list pager
     *
     * @return string
     */
    protected function getPagerClass()
    {
        return '\XLite\Module\XC\Reviews\View\Pager\Customer\Review';
    }
}
