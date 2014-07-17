{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Product details UPC/ISBN main block
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2014 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 *
 * @ListChild (list="product.details.common.product-attributes.elements", weight="300")
 *}

{if:isShowField(#upcIsbn#)}
  <li IF="getUpcIsbn()" class="identifier product-upc-isbn">
    <div><strong class="type">{t(#UPC/ISBN for customers#)}</strong></div>
    <span class="value">{getUpcIsbn()}</span>
  </li>
{end:}
