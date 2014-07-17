<?php if (!($this->getWeight()==0)): ?><li >
  <div><strong><?php echo func_htmlspecialchars($this->t('Weight')); ?></strong></div>
  <span><?php echo func_htmlspecialchars($this->getWeight()); ?> <?php echo func_htmlspecialchars($this->getWeightSymbol()); ?></span>
</li><?php endif; ?>
