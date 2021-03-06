/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Product comparison
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

function product_comparison() {
  jQuery('div.compare-checkbox').mouseover(
    function() {
      jQuery(this).parent().addClass('visible');
    }
  );

  jQuery('.compare-checkbox input').not('.binded').each(
    function() {
      var pr = jQuery(this);
      pr.change(
        function() {
          var action = pr.prop('checked') ? 'add' : 'delete';
          core.post(
            URLHandler.buildURL(
              {
                target: 'product_comparison',
                action: action
              }
            ),
            function(XMLHttpRequest, textStatus, data, valid) {
              if (data) {
                data = jQuery.parseJSON(data);
                if (data.count > 0) {
                  jQuery('div.compare-popup').removeClass('hidden_item');
                } else {
                  jQuery('div.compare-popup').addClass('hidden_item');
                }
                if (data.count > 1) {
                  jQuery('button.compare').removeClass('disabled');
                } else {
                  jQuery('button.compare').addClass('disabled');
                }
                jQuery('.compare-products-selected').text(data.title);
              }
            },
            {
              target:     'product_comparison',
              action:     action,
              product_id: pr.data('id')
            },
            {
              rpc: true
            }
          );
        }
      );
      core.bind('updateProductComparison',
        function(event, data) {
          if (data.productId == pr.data('id')) {
            if (data.action == 'add') {
              pr.prop('checked', 'checked');

            } else {
              pr.removeProp('checked');
            }
          }
        }
      );
    }
  ).addClass('binded');
}
