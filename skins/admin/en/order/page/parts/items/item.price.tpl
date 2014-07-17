{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Price item cell
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 *
 * @ListChild (list="order.item", weight="20")
 *}
<td class="price">{formatPrice(item.getItemNetPrice(),order.getCurrency())}</td>