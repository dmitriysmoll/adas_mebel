/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Attributes
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

jQuery().ready(
  function () {
    jQuery('#use_classes').change(
      function () {
        if ('D' == jQuery(this).val()) {
            jQuery('tr.product-classes').show();
        } else {
            jQuery('tr.product-classes').hide();
        }
      }
    );
    if ('D' != jQuery('#use_classes').val()) {
        jQuery('tr.product-classes').hide();
    }
  }
);
