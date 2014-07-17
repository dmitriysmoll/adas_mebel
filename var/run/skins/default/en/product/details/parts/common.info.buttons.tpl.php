<div class="product-buttons shade-base">
  <?php if ($this->isProductAdded()){?>
    <?php $this->displayNestedViewListContent('buttons-added'); ?>
  <?php }else{ ?>
    <?php $this->displayNestedViewListContent('buttons'); ?>
  <?php }?>
</div>
