<?php if ($this->isPaymentShippingSectionVisible()): ?><div  class="line-2">

  <?php if ($this->isPaymentSectionVisible()): ?><div  class="payment">
    <h2><?php echo func_htmlspecialchars($this->t('Payment info')); ?></h2>
    <div class="box"><?php $this->displayViewListContent('order.payment'); ?></div>
  </div><?php endif; ?>

  <?php if ($this->isShippingSectionVisible()): ?><div  class="shipping">
    <h2><?php echo func_htmlspecialchars($this->t('Shipping info')); ?></h2>
    <div class="box"><?php $this->displayViewListContent('order.shipping'); ?></div>
  </div><?php endif; ?>

  <?php $this->displayViewListContent('order.operations.sections'); ?>

  <div class="clear"></div>
</div><?php endif; ?>
