{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Customer's saved credit cards header
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 *
 * @ListChild (list="customer.account.add_new_card.address", weight="100")
 *}

<form method="post" action="cart.php?target=add_new_card" id="set_payment_method">
  
  <input type="hidden" name="action" value="set_payment_method">

  Processor: 
  <select name="payment_method" value="{getPaymentMethod()}" id="payment_method" style="width: 300px;">

    {foreach:getPaymentMethodsList(),pm}
      {if:pm.getMethodId()=getPaymentMethod()}
        <option selected value="{pm.getMethodId()}">{pm.getTitle()}</option>
      {else:}
        <option value="{pm.getMethodId()}">{pm.getTitle()}</option>
      {end:}
    {end:}

  </select>


</form>

<br/>
