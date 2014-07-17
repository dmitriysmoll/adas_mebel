<div class="product-stock <?php echo func_htmlspecialchars($this->getFingerprint()); ?>">
  <?php if ($this->isInStock()){?>
    <span class="stock-level product-in-stock">
      <span class="in-stock-label"><?php echo func_htmlspecialchars($this->t('In stock')); ?></span>
      <span class="product-items-available">(<?php echo func_htmlspecialchars($this->t('X items available',array('count'=>$this->getAvailableAmount()))); ?>)</span>
    </span>
  <?php }else{ ?>
    <?php if ($this->isOutOfStock()){?>
      <span class="stock-level product-out-of-stock"><?php echo func_htmlspecialchars($this->getOutOfStockMessage()); ?></span>
    <?php }?>
  <?php }?>
</div>
