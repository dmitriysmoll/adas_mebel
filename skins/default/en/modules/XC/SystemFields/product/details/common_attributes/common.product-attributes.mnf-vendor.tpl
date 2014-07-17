{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Product details UPC/ISBN main block
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2014 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 *
 * @ListChild (list="product.details.common.product-attributes.elements", weight="400")
 *}

{if:isShowField(#mnfVendor#)}
  <li IF="getMnfVendor()" class="identifier product-mnf-vendor">
    <div><strong class="type">{t(#Mnf/Vendor for customers#)}</strong></div>
    <span class="value">{getMnfVendor()}</span>
  </li>
{end:}
