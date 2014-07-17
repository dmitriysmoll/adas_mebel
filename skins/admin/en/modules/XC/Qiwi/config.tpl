{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Qiwi payment method configuration page
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 *}

<p>{t(#To complete Qiwi payment gateway integration configuration#,_ARRAY_(#callbackURL#^getQiwiCallbackURL())):h}</p>

<table cellspacing="1" cellpadding="5" class="settings-table">

  <tr>
    <td class="setting-name">
    <label for="settings_login">{t(#Login id#)}</label>
    </td>
    <td>
      <input type="text" id="settings_login" name="settings[login]" value="{paymentMethod.getSetting(#login#)}" class="field-required field-integer" />
    </td>
  </tr>

  <tr>
    <td class="setting-name">
    <label for="settings_password">{t(#Password#)}</label>
    </td>
    <td>
      <input type="text" id="settings_password" name="settings[password]" value="{paymentMethod.getSetting(#password#)}" class="field-required" />
    </td>
  </tr>

  <tr>
    <td class="setting-name">
    <label for="settings_secret_key">{t(#Secret key#)}</label>
    </td>
    <td>
      <input type="text" id="settings_secret_key" name="settings[secret_key]" value="{paymentMethod.getSetting(#secret_key#)}" class="field-required" />
    </td>
  </tr>

  <tr>
    <td class="setting-sign">
    <label for="settings_sign">{t(#Qiwi sign#)}</label>
    </td>
    <td>
    <input type="hidden" id="settings_sign" name="settings[sign]" value="" />
    <input type="checkbox" id="settings_sign" name="settings[sign]" value="1" {if:paymentMethod.getSetting(#sign#)}checked="checked"{end:} />
    </td>
  </tr>

  <tr>
    <td class="setting-name">
    <label for="settings_prefix">{t(#Order id prefix#)}</label>
    </td>
    <td>
      <input type="text" id="settings_prefix" name="settings[prefix]" value="{paymentMethod.getSetting(#prefix#)}" />
    </td>
  </tr>

  <tr>
    <td class="setting-name">
    <label for="settings_lifetime">{t(#Order lifetime in hours#)}</label>
    </td>
    <td>
      <input type="text" id="settings_lifetime" value="{paymentMethod.getSetting(#lifetime#)}" name="settings[lifetime]" class="field-integer" />
    </td>
  </tr>

</table>
