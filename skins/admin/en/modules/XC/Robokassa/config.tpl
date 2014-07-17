{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Robokassa payment system configuration page
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2014 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 *}

<p>{t(#To complete Robokassa payment system integration configuration#,_ARRAY_(#robokassaCallbackURL#^paymentMethod.processor.robokassaCallbackURL)):h}</p>

<input type="hidden" id="settings_currency" name="settings[currency]" value="Qiwi29OceanR" />

<table cellspacing="1" cellpadding="5" class="settings-table">

  <tr>
    <td class="setting-name">
      <label for="settings_result_url">{t(#Result URL#)}:</label>
    </td>
    <td>
      {paymentMethod.processor.robokassaCallbackURL}
    </td>
  </tr>

  <tr>
    <td class="setting-name">
      <label for="settings_success_url">{t(#Success URL#)}:</label>
    </td>
    <td>
      {paymentMethod.processor.robokassaSuccessURL}
    </td>
  </tr>

  <tr>
    <td class="setting-name">
      <label for="settings_fail_url">{t(#Fail URL#)}:</label>
    </td>
    <td>
      {paymentMethod.processor.robokassaFailURL}
    </td>
  </tr>

  <tr>
    <td class="setting-name">
      <label for="settings_response_type">{t(#Response type#)}:</label>
    </td>
    <td>
      POST
    </td>
  </tr>

  <tr>
    <td class="setting-name">
      <label for="settings_login">{t(#Merchant login#)}:</label>
    </td>
    <td>
      <input type="text" id="settings_login" name="settings[login]" value="{paymentMethod.getSetting(#login#)}" class="field-required" />
    </td>
  </tr>

  <tr>
    <td class="setting-name">
      <label for="settings_password1">{t(#Password 1#)}:</label>
    </td>
    <td>
      <input type="password" id="settings_password1" name="settings[password1]" value="{paymentMethod.getSetting(#password1#)}" class="field-required" />
    </td>
  </tr>

  <tr>
    <td class="setting-name">
      <label for="settings_password2">{t(#Password 2#)}:</label>
    </td>
    <td>
      <input type="password" id="settings_password2" name="settings[password2]" value="{paymentMethod.getSetting(#password2#)}" class="field-required" />
    </td>
  </tr>

  <tr>
    <td class="setting-name">
      <label for="settings_language">{t(#Language#)}:</label>
    </td>
    <td>
      <select id="settings_language" name="settings[language]" class="field-required" />
        <option value="ru">{t(#Russian#)}</option>
        <option value="en">{t(#English#)}</option>
      </select>
    </td>
  </tr>

  <tr>
    <td class="setting-name">
      <label for="settings_mode">{t(#Test/Live mode#)}</label>
    </td>
    <td>
      <widget
              class="\XLite\View\FormField\Select\TestLiveMode"
              fieldId="settings_mode"
              fieldName="settings[mode]"
              fieldOnly=true
              value="{paymentMethod.getSetting(#mode#)}" />
    </td>
  </tr>

</table>

<script type="text/javascript">
//<![CDATA[
  jQuery("#settings_currency").val("{paymentMethod.getSetting(#currency#)}");
  jQuery("#settings_language").val("{paymentMethod.getSetting(#language#)}");
//]]>
</script>