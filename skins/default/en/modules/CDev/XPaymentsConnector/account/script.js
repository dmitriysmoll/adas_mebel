/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Sale widget controller
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2014 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

$(document).ready(function() {

  $('#payment_method').change(function() {
    $('#set_payment_method').submit();
  });

  $('#address').change(function() {
    $('#set_address').submit();
  });

  $('#submit-button').click(function() {

    var message = {
      message: 'submitPaymentForm',
      params:  {}
    };

    var iframe = jQuery('#add_new_card_iframe').get(0);

    if (window.postMessage && window.JSON) {
      iframe.contentWindow.postMessage(JSON.stringify(message), '*');
    }
  });

});
