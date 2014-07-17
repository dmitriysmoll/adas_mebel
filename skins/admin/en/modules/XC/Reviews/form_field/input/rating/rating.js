/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Vote bar controller
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2014 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

CommonForm.elementControllers.push(
  {
    pattern: '.vote-bar ul li a',
    handler: function () {

      jQuery(this)
        .hover(
          function() {
            if (!this._previous) {
              this._previous = jQuery(this).parent('li').prevAll();
            }

            jQuery(this).find('span').addClass('over');

            this._previous.each(function(index){
              jQuery(this).find('span').addClass('over');
            });
          },

          function() {
            if (!this._previous) {
              this._previous = jQuery(this).parent('li').prevAll();
            }

            this._previous.each(function(index) {
              jQuery(this).find('span').removeClass('over');
            });
            jQuery(this).find('span').removeClass('over');
          }
        )
        .click(
        function () {
        
          if (!this._previous) {
            this._previous = jQuery(this).parent('li').prevAll();
          }

          if (!this._all) {
            this._all = jQuery(this).parent('li').parent('ul').children('li');
          }

          this._all.each(function(index) {
            jQuery(this).find('span').removeClass('full');
          });
          jQuery(this).find('span').addClass('full');
          this._previous.each(function(index) {
            jQuery(this).find('span').addClass('full');
          });

          if (!this._rating) {
            this._rating = parseInt(jQuery(this).parent('li').attr('class').match(/\d+/)) + 1;
          }

          jQuery(this).parent('li').parent('ul').parent('div').children('input').val(this._rating);
        }
      );
    }
  }
);
