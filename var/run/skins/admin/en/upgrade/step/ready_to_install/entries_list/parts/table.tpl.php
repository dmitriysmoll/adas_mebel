<table class="downloaded-components">
  <tr class="header"><?php $this->displayInheritedViewListContent('sections.table.header'); ?></tr>
  <?php $_foreach_var = $this->getUpgradeEntries(); if (isset($_foreach_var)) { $this->entryArraySize=count($_foreach_var); $this->entryArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->entry){ $this->entryArrayPointer++; ?>

  <?php if (!($this->get('entry')->getErrorMessages())): ?><tr  class="module-entry">
    <?php $this->displayInheritedViewListContent('sections.table.columns', array('entry' => $this->get('entry'))); ?>
  </tr><?php endif; ?>

  <?php if ($this->get('entry')->getErrorMessages()): ?><tr  class="module-entry module-errors">
    <?php $this->displayInheritedViewListContent('sections.table.columns', array('entry' => $this->get('entry'))); ?>
  </tr><?php endif; ?>

  <?php if ($this->get('entry')->getErrorMessages()): ?><tr  class="error-messages">
    <?php $this->displayInheritedViewListContent('sections.table.columns.error', array('messages' => $this->get('entry')->getErrorMessages())); ?>
  </tr><?php endif; ?>
  <?php }?>
</table>
