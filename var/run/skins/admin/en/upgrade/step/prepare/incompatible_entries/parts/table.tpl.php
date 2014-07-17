<table class="incompatible-modules-list">
  <?php $entry = isset($this->entry) ? $this->entry : null; $_foreach_var = $this->getIncompatibleEntries(); if (isset($_foreach_var)) { $this->entryArraySize=count($_foreach_var); $this->entryArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->entry){ $this->entryArrayPointer++; ?><tr >
    <?php $this->displayInheritedViewListContent('sections.table.columns', array('entry' => $this->get('entry'))); ?>
  </tr>
<?php } $this->entry = $entry; ?>
</table>
