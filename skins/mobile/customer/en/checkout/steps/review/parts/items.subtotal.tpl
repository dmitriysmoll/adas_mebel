{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Checkout : order review step : items : subtotal
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 *}


<div class="totals-row items-row clearfix">
  <strong>{t(#Subtotal#)}:</strong>
  <widget class="XLite\View\Surcharge" surcharge="{cart.getSubtotal()}" currency="{cart.getCurrency()}" />

  <div IF="cart.getItemsIncludeSurchargesTotals()" class="including-modifiers">
    <table class="including-modifiers totals" cellspacing="0">
      <tr FOREACH="cart.getItemsIncludeSurchargesTotals(),row">
        <td class="name">{t(#Including X#,_ARRAY_(#name#^row.surcharge.getName()))}:</td>
        <td class="value"><widget class="XLite\View\Surcharge" surcharge="{row.cost}" currency="{cart.getCurrency()}" /></td>
      </tr>
    </table>
  </div>
</div>
