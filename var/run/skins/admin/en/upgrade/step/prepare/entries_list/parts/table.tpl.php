<table class="entries-list">
  <tr class="header"><?php $this->displayInheritedViewListContent('sections.table.header'); ?></tr>
  <tr class="separator"><td colspan="6"></td></tr>
  <?php $_foreach_var = $this->getUpgradeEntries(); if (isset($_foreach_var)) { $this->entryArraySize=count($_foreach_var); $this->entryArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->entry){ $this->entryArrayPointer++; ?>
  <tr class="<?php echo func_htmlspecialchars($this->getEntryRowCSSClass($this->get('entry'))); ?>">
    <?php $this->displayInheritedViewListContent('sections.table.columns', array('entry' => $this->get('entry'))); ?>
    <?php if (!($this->isModule($this->get('entry')))){?>
      </tr><tr class="separator"><td colspan="6"></td>
    <?php }?>
  </tr>
  <?php }?>
</table>
