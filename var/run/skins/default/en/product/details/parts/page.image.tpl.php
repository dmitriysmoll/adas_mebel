<div class="image<?php if (!($this->get('product')->hasImage())){?> empty<?php }?>" style="width: <?php echo func_htmlspecialchars($this->getMaxImageWidth()); ?>px;">
  <?php $this->displayViewListContent('product.details.page.image'); ?>
</div>
