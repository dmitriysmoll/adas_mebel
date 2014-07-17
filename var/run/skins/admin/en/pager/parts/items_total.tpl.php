<?php if ($this->isItemsPerPageVisible()): ?><div  class="pager-items-total">
  <?php echo func_htmlspecialchars($this->t('Items')); ?>:
  <span class="begin-record-number"><?php echo func_htmlspecialchars($this->getBeginRecordNumber()); ?></span>
  &ndash;
  <span class="end-record-number"><?php echo func_htmlspecialchars($this->getEndRecordNumber()); ?></span> <?php echo func_htmlspecialchars($this->t('of')); ?> <span class="records-count"><?php echo func_htmlspecialchars($this->getItemsTotal()); ?></span><?php if ($this->isItemsPerPageSelectorVisible()): ?><span >, <input type="text" value="<?php echo func_htmlspecialchars($this->getItemsPerPage()); ?>" class="page-length" /> <?php echo func_htmlspecialchars($this->t('per page')); ?> </span><?php endif; ?>
</div><?php endif; ?>

<div class="clear"></div>
