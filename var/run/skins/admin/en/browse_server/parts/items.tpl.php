<div class="browse-selector">
  <ul class="file-system-entries">
    <li class="file-system-entry up-level">
      <?php echo func_htmlspecialchars($this->displayCommentedData($this->getCatalogInfo())); ?>
      <a class="type-catalog up-level"><img src="skins/default/en/images/spacer.gif" alt="" />[...]</a>
    </li>
    <?php $entry = isset($this->entry) ? $this->entry : null; $_foreach_var = $this->getFSEntries(); if (isset($_foreach_var)) { $this->entryArraySize=count($_foreach_var); $this->entryArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->idx => $this->entry){ $this->entryArrayPointer++; ?><li  class="fs-entry">
      <?php $this->displayViewListContent('browseServer.item', array('entry' => $this->get('entry'))); ?>
    </li>
<?php } $this->entry = $entry; ?>
    <?php if ($this->isEmptyCatalog()): ?><li  class="empty-catalog"><?php echo func_htmlspecialchars($this->t('Directory is empty')); ?></li><?php endif; ?>
  </ul>
</div>
