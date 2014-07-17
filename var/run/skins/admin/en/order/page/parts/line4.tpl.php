<?php if ($this->isCustomerNotesVisible()): ?><div  class="line-4">
  <h2><?php echo func_htmlspecialchars($this->t('Customer note')); ?></h2>
  <?php $this->displayViewListContent('order.customerNotes'); ?>
</div><?php endif; ?>
