{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Invoice shipping address
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 *
 * @ListChild (list="invoice.bottom.address.shipping", weight="20")
 *}
<strong style="color: #000;font-size: 20px;font-weight: normal;padding-bottom: 3px;">{t(#Shipping address#)}</strong>

<ul style="padding-top: 12px;list-style: none;margin: 0;padding-left: 0;">
  <li FOREACH="getAddressSectionData(saddress),idx,field" style="padding-right: 4px;white-space: nowrap;" class="{field.css_class} address-field">
    <span style="font-size: 14px;line-height: 20px;padding-top: 8px;color: #333;font-style: italic;">{t(field.title)}:</span>
    <span style="font-size: 14px;line-height: 20px;padding-top: 8px;color: #000;">{field.value}</span>
  </li>
</ul>
