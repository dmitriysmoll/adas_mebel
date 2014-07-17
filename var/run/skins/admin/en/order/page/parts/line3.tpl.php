<?php if ($this->isOrderItemsVisible()): ?><div  class="line-3">
  <h2><?php echo func_htmlspecialchars($this->t('Order items')); ?></h2>
  <?php $this->displayViewListContent('order.items.wrapper'); ?>
</div><?php endif; ?>
