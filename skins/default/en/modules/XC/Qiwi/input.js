/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Qiwi mobile phone input controller
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

function checkQiwiPhoneNumber(field, rules, i, options)
{
  var value = jQuery.trim(field.val()).replace(/[^\+0-9]/g, '');

  if (-1 === value.search(/^\+[0-9]{1,15}$/)) {
    return core.t('The phone number must be in international format (e.g. +7-111-111-11-11)');

  } else if (field.val() != value) {
    field.val(value);
  }
}

core.bind('checkout.common.anyChange', function() {
  var addressPhoneVal = jQuery('#shippingaddress-phone').val(),
    qiwiPhone = jQuery('#payment-qiwi-phone-number');

  if (addressPhoneVal && !qiwiPhone.val()) {
    qiwiPhone.val(addressPhoneVal);
  }
});
