{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Reviewer (email and name)
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2014 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 *
 * @ListChild (list="review.modify.fields", weight="300")
 *}
<li class="input clearfix">
  <div class="table-label">
    <label for="email" class="email">{t(#Email#)}</label>
  </div>

  <div class="star">&nbsp;</div>

  <div class="table-value">
    <widget
      class="\XLite\Module\XC\Reviews\View\FormField\Input\Autocomplete\Email"
      fieldOnly="true"
      fieldName="email"
      placeholder="{t(#Start typing customer email#)}"
      value="{entity.email}" />
  </div>

</li>

<li class="input clearfix">
  <div class="table-label">
    <label for="reviewerName" class="reviewerName">{t(#Customer name#)}</label>
  </div>

  <div class="star">&nbsp;</div>

  <div class="table-value">
    <widget
      class="\XLite\Module\XC\Reviews\View\FormField\Input\Autocomplete\ReviewerName"
      fieldOnly="true"
      fieldName="reviewerName"
      placeholder="{t(#Start typing customer name#)}"
      value="{entity.reviewerName}" />
  </div>
  
  <input IF="{entity.profile}" type="hidden" name="profile_id" id="profile-id" value="{entity.profile.getProfileId()}" />
  <input IF="{!entity.profile}" type="hidden" name="profile_id" id="profile-id" value="" />

</li>
