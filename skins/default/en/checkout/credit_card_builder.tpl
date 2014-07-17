{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Autogenerated credit card form
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 *}
<form action="{cart.paymentMethod.getFormURL(cart)}" method="{cart.paymentMethod.getFormMethod()}" name="cc_form" class="cc-auto-form">
  <input FOREACH="cart.paymentMethod.getFields(cart),name,value" type="hidden" name="{name}" value="{value:r}" />
</form>
