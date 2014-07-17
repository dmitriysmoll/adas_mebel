<?php if ($this->hasAttributes()): ?><ul  class="extra-fields <?php echo func_htmlspecialchars($this->getFingerprint()); ?>">
  <?php $this->displayViewListContent('product.details.common.product-attributes.elements'); ?>
</ul><?php endif; ?>
