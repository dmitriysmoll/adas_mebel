{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Checkout shipping address form
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 *}
<widget class="\XLite\View\Form\Checkout\UpdateProfile" name="shippingAddress" className="address shipping-address" />
  
  <ul class="form shipping-address-form">
    <li FOREACH="getAddressFields(),fieldName,fieldData" class="item-{fieldName} {fieldData.additionalClass} ">
      <widget
        class="{fieldData.class}"
        attributes="{getFieldAttributes(fieldName,fieldData)}"
        label="{fieldData.label}"
        fieldName="{getFieldFullName(fieldName)}"
        stateSelectorId="shippingaddress-state-id"
        stateInputId="shippingaddress-custom-state"
        value="{getFieldValue(fieldName)}"
        comment="{fieldData.comment}"
        wrapperClass="{fieldData.wrapperClass}"
        placeholder="{getFieldPlaceholder(fieldName)}"
        required="{fieldData.required}" />
      <list name="checkout.shipping.address.{fieldName}" address="{getAddressInfo()}" fieldName="{fieldName}" fieldData="{fieldData}" />
    </li>
	<list name="checkout.shipping.address" address="{getAddressInfo()}" />
  </ul>
<widget name="shippingAddress" end />

<div class="shipping-help-info">
	<span>Не нашли свой город в списке?</span>
	<ul>
	<li>1. Выбирете для доставки город Воронеж</li>
	<li>2. В поле "Замечания к заказу" укажите необходимый вам город, и наши менеджеры рассчитают стоимость доставки</li>
	<li>3. Либо напишите нам, используя форму снизу справа или через страницу <a rel="nofollow" target="_blank" href="http://adas-mebel.ru/?target=contact_us">Напишите нам</a></li>
	<li><strong>Мы обязательно найдем оптимальное решение для доставки вашей мебели.</strong>
	</ul>
</div>
