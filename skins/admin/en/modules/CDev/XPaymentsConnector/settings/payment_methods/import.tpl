{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Test module 
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2014 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 *}

<div class="no-payments-requested">

  <h3>{t(#Import payment methods from X-Payments#)}</h3>

    <widget class="\XLite\Module\CDev\XPaymentsConnector\View\Form\ImportPaymentMethods" name="import" />

      <p>{t(#Click the button below to import payment methods from X-Payments. <b>Note:</b> this will replace the current payment methods#):h}</p>

      <br/>

      <widget class="\XLite\View\Button\Submit" label="{t(#Re-import#)}" style="main" />

      <widget class="\XLite\View\Button\BackToModulesLink" moduleId="{getModuleID()}" style="action addons-list-back-button" />

  <widget name="import" end />

</div>
