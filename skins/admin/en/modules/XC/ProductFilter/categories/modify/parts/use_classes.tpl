{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Category classes
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 *
 * @ListChild (list="category.modify.list", weight="1100")
 *}

<tr>
  <td class="name-attribute">{t(#Classes for product filter#)}</td>
  <td class="star"></td>
  <td>
    <widget
      class="\XLite\Module\XC\ProductFilter\View\FormField\Select\UseClasses"
      fieldName="{getNamePostedData(#useClasses#)}"
      fieldOnly=true
      value="{category.getUseClasses()}"
      fieldId="use_classes" />
  </td>
</tr>
