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
 * http://next.x-cart.com/software-license-agreement.html
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
 * PHP version 5.3.0
 *
 * * @category  X-Cart Next
 * @author    Perception System <x-cart@perceptionsystem.com>
 * @copyright Copyright (c) 2011-2012 Perception System <x-cart@perceptionsystem.com>. All rights reserved
 * @license   http://next.x-cart.com/software-license-agreement.html X-Cart Next License Agreement
 * @link      http://www.perceptionsystem.com/
*/

namespace XLite\Module\PerceptionSystemPvtLtd\ProductVideo\View\Product\Details\Customer\Page;


/**
 * APage
 */
abstract class APage extends \XLite\View\Product\Details\Customer\Page\APage implements \XLite\Base\IDecorator
{
   const VIDEO_TAB_LIST = 'product.details.page.tab.video';
   
   /**
    * Define tabs
    *
    * @return array
   	*/
   
   protected function defineTabs()
    {
        $list = parent::defineTabs();

        if ($this->hasProductVideo()) {
            $list['Product Video'] = array(
                'list' => static::VIDEO_TAB_LIST,
            );
        }

        return $list;
    }

	/**
     * Check - product has Video tab or not
     *
     * @return boolean
     */
    protected function hasProductVideo()
    {
        return 0 < strlen($this->getProduct()->getProductVideo());
    }
}