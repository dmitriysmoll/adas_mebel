<?php if ($this->isMoreLinkVisible()): ?><div  class="view-all-items-link">
  <a href="<?php echo func_htmlspecialchars($this->buildURL('order','',array('order_number'=>$this->get('order')->getOrderNumber()))); ?>"><?php echo func_htmlspecialchars($this->t('View all ordered items')); ?></a>
</div><?php endif; ?>
