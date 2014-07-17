/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Password (visible) controller
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

CommonElement.prototype.handlers.push(
  {
    canApply: function () {
      return 0 < this.$element.filter('input.password-visible').length;
    },
    handler: function () {
      var handler = function(event)
      {
        var p = this.$element.parent();
        var newElement = this.$element.clone(true, true);

        this.$element.remove();

        newElement.attr(
          'type',
          jQuery(event.currentTarget).hasClass('close') ? 'text' : 'password'
        );

        p.prepend(newElement);

        if (jQuery(event.currentTarget).hasClass('close')) {
          p.nextAll('.eye').eq(0).addClass('opened');
        } else {
          p.nextAll('.eye').eq(0).removeClass('opened');
        }

        return false;
      };

      this.$element.parent().nextAll('.eye').eq(0).find('.open,.close').click(_.bind(handler, this));
    }
  }
);
