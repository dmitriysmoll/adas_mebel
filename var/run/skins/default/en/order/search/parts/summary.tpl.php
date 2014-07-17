<?php if ($this->getTotalCount()): ?><h2  class="order-search-title"><?php echo $this->t('X orders',array('count'=>$this->getTotalCount())); ?></h2><?php endif; ?>
<?php if ($this->getTotalCount()==0): ?><h2  class="order-search-title"><?php echo func_htmlspecialchars($this->t('No orders')); ?></h2><?php endif; ?>
