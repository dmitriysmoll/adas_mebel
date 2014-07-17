{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * WebMoney payment system configuration page
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 *}

<p>{t(#To complete WebMoney payment system integration configuration#,_ARRAY_(#webmoneyCallbackURL#^getWebmoneyCallbackURL())):h}</p>

<table cellspacing="1" cellpadding="5" class="settings-table">

  <tr>
    <td class="setting-name">
    <label for="settings_purse">{t(#Purse#)}</label>
    </td>
    <td>
      <input type="text" id="settings_purse" name="settings[purse]" value="{paymentMethod.getSetting(#purse#)}" class="field-required" />
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
    <td class="setting-name">
    <label for="settings_hash_type">{t(#Hash type#)}</label>
    </td>
    <td>
      <select id="settings_hash_type" name="settings[hash_type]" value="{paymentMethod.getSetting(#hash_type#)}">
        <option value="MD5" {if:paymentMethod.getSetting(#hash_type#)=#MD5#}selected="selected"{end:}>MD5</option>
        <option value="SIGN" {if:paymentMethod.getSetting(#hash_type#)=#SIGN#}selected="selected"{end:}>SIGN</option>
      </select>
    </td>
  </tr>

  <tbody id="hash_type_sign_specific"{if:paymentMethod.getSetting(#hash_type#)=#MD5#} style="display: none;"{end:}>

    <tr>
      <td class="setting-name">
      <label for="settings_wmid">{t(#WMID#)}</label>
      </td>
      <td>
        <input type="text" id="settings_wmid" value="{paymentMethod.getSetting(#wmid#)}" name="settings[wmid]" class="field-required" />
      </td>
    </tr>

    <tr>
      <td class="setting-name">
      <label for="settings_key_path">{t(#WebMoney Keeper Classic key path#)}</label>
      </td>
      <td>
        <input type="text" id="settings_key_path" value="{paymentMethod.getSetting(#key_path#)}" name="settings[key_path]" class="field-required" />
      </td>
    </tr>

    <tr>
      <td class="setting-name">
      <label for="settings_key_password">{t(#Key password#)}</label>
      </td>
      <td>
        <input type="password" id="settings_key_password" value="{paymentMethod.getSetting(#key_password#)}" name="settings[key_password]" class="field-required" />
      </td>
    </tr>

  </tbody>

</table>

<script type="text/javascript">
//<![CDATA[
(function ($) {

  $('#settings_hash_type').change(function () {
    $('#hash_type_sign_specific').toggle($(this).val() == 'SIGN');
  });

})(jQuery);
//]]>
</script>
