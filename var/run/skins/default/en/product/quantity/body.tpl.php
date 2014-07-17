<span class="<?php echo func_htmlspecialchars($this->getCSSClass()); ?> <?php echo func_htmlspecialchars($this->getFingerprint()); ?>">
<?php if (!($this->isOutOfStock())){?>
  <?php echo func_htmlspecialchars($this->t('Qty')); ?>: <?php $this->getWidget(array('fieldValue' => $this->getQuantity(), 'product' => $this->getProduct(), 'maxValue' => $this->getMaxQuantity()), '\XLite\View\Product\QuantityBox')->display(); ?>
<?php }?>
</span>
