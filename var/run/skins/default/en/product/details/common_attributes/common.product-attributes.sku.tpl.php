<?php if ($this->getSKU()): ?><li  class="identifier product-sku">
  <div><strong class="type"><?php echo func_htmlspecialchars($this->t('SKU')); ?></strong></div>
  <span class="value"><?php echo func_htmlspecialchars($this->getSKU()); ?></span>
</li><?php endif; ?>
