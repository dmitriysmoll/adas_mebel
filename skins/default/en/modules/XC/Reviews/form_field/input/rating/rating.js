/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Vote bar controller
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2014 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

function VoteBarController(base)
{
  this.callSupermethod('constructor', arguments);

  var form = jQuery(this.base).closest('form').get(0);
  if (form) {
      this.productId = jQuery('input[name=product_id]', form).eq(0).val();
  }

  if (this.productId) {
    this.returnTarget = jQuery('input[name=return_target]', form).eq(0).val();
    this.block = new VoteBarView(this.base, this.productId, this.returnTarget);
  }
}

extend(VoteBarController, AController);

// Controller name
VoteBarController.prototype.name = 'VoteBarController';

// Find pattern
VoteBarController.prototype.findPattern = '.product-average-rating';

// Controller associated main widget
VoteBarController.prototype.block = null;

// Controller associated buttons block widget
VoteBarController.prototype.buttonsBlock = null;

// Initialize controller
VoteBarController.prototype.initialize = function()
{
  var o = this;

  this.base.bind(
    'reload',
    function(event, box) {
      event.stopImmediatePropagation();
      o.bind(box);
    }
  );
};

function VoteBarClick(obj) {

  if (!obj._previous) {
    obj._previous = jQuery(obj).parent('li').prevAll();
  }

  if (!obj._all) {
    obj._all = jQuery(obj).parent('li').parent('ul').children('li');
  }

  obj._all.each(function(index) {
    jQuery(this).find('span').removeClass('full');
  });

  jQuery(obj).find('span').addClass('full');

  obj._previous.each(function(index) {
    jQuery(this).find('span').addClass('full');
  });

  if (!obj._rating) {
    obj._rating = parseInt(jQuery(obj).parent('li').attr('class').match(/\d+/)) + 1;
  }

  jQuery(obj).parentsUntil('form').parent('form').find('input[name=rating]').val(obj._rating);

  return false;
}

/**
 * Main widget
 */
function VoteBarView(base, productId, returnTarget)
{
  this.callSupermethod('constructor', arguments);

  this.productId = productId;
  this.returnTarget = returnTarget;

  this.linkClickHandler = function(event)
  {
    event.stopPropagation();

    return false;
  };
}

extend(VoteBarView, ALoadable);

// Product id
VoteBarView.prototype.productId = null;

// Return target (product page or product reviews page)
VoteBarView.prototype.returnTarget = null;

// Rating
VoteBarView.prototype.rating = null;

// Shade widget
VoteBarView.prototype.shadeWidget = true;

// Widget target
VoteBarView.prototype.widgetTarget = 'review';

// Widget class name
VoteBarView.prototype.widgetClass = '\\XLite\\Module\\XC\\Reviews\\View\\AverageRating';

// Previous value of 'action' input
VoteBarView.prototype.prevFormActionValue = '';
VoteBarView.prototype.prevFormActionInput = null;
VoteBarView.prototype.prevShadeWidget = null;

// Postprocess widget
VoteBarView.prototype.postprocess = function(isSuccess, initial)
{
  this.callSupermethod('postprocess', arguments);

  if (isSuccess) {

    var o = this;

    jQuery(this.base).find('span.editable').bind(
      'click',
      function(event)
      {
        VoteBarClick(this);
        return o.rateProduct(event, jQuery(this));
      }
    );
  }
};

// Get additional parameters
VoteBarView.prototype.getParams = function(params)
{
  params = this.callSupermethod('getParams', arguments);
  params.product_id = this.productId;

  return params;
};

// Form submit handler
VoteBarView.prototype.rateProduct = function(event, block)
{
  var o = this;
  var form = jQuery(block).closest('form').get(0);

  var rating = jQuery('input[name=rating]', jQuery(form)).eq(0).val();
  this.rating = rating;

  var widgetClass = jQuery('input[name=target_widget]', form).eq(0).val();
  if (widgetClass) {
    this.widgetClass = widgetClass;
  }

  var productId = jQuery('input[name=product_id]', form).eq(0).val();
  if (productId) {
    this.productId = productId;
  }

  var o = this;
  core.post(
    URLHandler.buildURL(
      {
        target: 'review',
        action: 'rate'
      }
    ),
    function () {
      o.load();
    },
    {
      'product_id': productId,
      'rating' : rating
    }
  );

  return false;
};

// Form POST processor
VoteBarView.prototype.postprocessRateProduct = function(XMLHttpRequest, textStatus, data, isValid)
{
};

core.autoload(VoteBarController);

// Required for ability to rate products after ajax reloading of products list
core.bind('list.products.postprocess', function() {
  core.autoload(VoteBarController);
});

core.bind('block.product.details.postprocess', function() {
  core.autoload(VoteBarController);
});

CommonForm.elementControllers.push(
  {
    pattern: '.vote-bar ul li span.editable',
    handler: function () {
      jQuery(this)
        .hover(
          function() {
            if (!this._previous) {
              this._previous = jQuery(this).parent('li').prevAll();
            }

            jQuery(this).find('span').addClass('over');

            this._previous.each(function(index) {
              jQuery(this).find('span').addClass('over');
            });
          }, function() {
            if (!this._previous) {
              this._previous = jQuery(this).parent('li').prevAll();
            }

            this._previous.each(function(index) {
              jQuery(this).find('span').removeClass('over');
            });

            jQuery(this).find('span').removeClass('over');
          })
        .click(function() {
          return VoteBarClick(this);
        });
    }
  }
);

CommonForm.elementControllers.push(
  {
    pattern: 'div.icon-help',
    handler: function () {

      var $tooltip = jQuery('#' + jQuery(this).attr('id') + '_tooltip');

      jQuery(this)
        .hover(
          function() {
            $tooltip.css({'display': 'block'});
          },
          function() {
            $tooltip.css({'display': 'none'});
          }
        );
    }
  }
);
