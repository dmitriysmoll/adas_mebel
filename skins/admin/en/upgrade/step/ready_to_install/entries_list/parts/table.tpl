{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Entries list
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 *
 * @ListChild (list="upgrade.step.ready_to_install.entries_list.sections", weight="100")
 * @ListChild (list="upgrade.step.completed.entries_list.sections", weight="200")
 *}

<table class="downloaded-components">
  <tr class="header"><list name="sections.table.header" type="inherited" /></tr>
  {foreach:getUpgradeEntries(),entry}

  <tr IF="!entry.getErrorMessages()" class="module-entry">
    <list name="sections.table.columns" type="inherited" entry="{entry}" />
  </tr>

  <tr IF="entry.getErrorMessages()" class="module-entry module-errors">
    <list name="sections.table.columns" type="inherited" entry="{entry}" />
  </tr>

  <tr IF="entry.getErrorMessages()" class="error-messages">
    <list name="sections.table.columns.error" type="inherited" messages="{entry.getErrorMessages()}" />
  </tr>
  {end:}
</table>
