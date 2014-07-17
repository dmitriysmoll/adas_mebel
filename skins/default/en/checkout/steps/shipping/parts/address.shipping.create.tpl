{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Shipping address : create profile checkbox
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 *
 * @ListChild (list="checkout.shipping.address.email", weight="100")
 *}

<widget IF="isAnonymous()" template="checkout/steps/shipping/parts/address.create.tpl" />