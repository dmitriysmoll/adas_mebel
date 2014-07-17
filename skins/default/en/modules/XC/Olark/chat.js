/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Chant postprocessing
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2014 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */


jQuery(document).ready(
  function() {
    var f = function() {
      if (jQuery('.habla-desktop').length) {
        jQuery('.habla-desktop').addClass('overlay-blur-base');
        jQuery('#habla_window_div.habla_window_div_base').css({'z-index': '999'});

      } else if (arguments.callee.counter > 0) {
        arguments.callee.counter--;
        setTimeout(arguments.callee, 500);
      }
    }

    f.counter = 30;

    f();
  }
);
