{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Shopping cart item weight block
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 *
 * @ListChild (list="cart.item.info", weight="100")
 *}
<p class="item-out-of-stock" IF="{!item.isValidAmount()}">{t(#Out of stock#)}</p>
