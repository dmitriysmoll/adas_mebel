{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Body
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 *}

<div class="add-to-compare product">
  <div class="compare-popup{if:isEmptyList()} hidden{end:}">
    <div class="compare-checkbox">
      <input id="{getCheckboxId(product.product_id)}" type="checkbox" data-id="{product.product_id}"{if:isChecked(product.product_id)} checked="checked"{end:} />
      <label for="{getCheckboxId(product.product_id)}">{t(#Add to compare#)}</label>
    </div>
    <div class="compare-button">
      <widget class="\XLite\View\Button\Link" label="{t(#Compare products#)}" dataTheme="e" dataInline="false" location="{buildURL(#compare#)}" />
    </div>
  </div>
</div>