<?php if ($this->get('item')->getWeight()): ?><p class="item-weight" >
  <span><?php echo func_htmlspecialchars($this->t('Weight')); ?>:</span>
  <?php echo func_htmlspecialchars($this->get('item')->getWeight()); ?> <?php echo func_htmlspecialchars($this->getWeightSymbol()); ?>
</p><?php endif; ?>
