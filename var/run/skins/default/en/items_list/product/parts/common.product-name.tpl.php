<h3 class="product-name">
  <a class="fn url" href="<?php echo func_htmlspecialchars($this->buildURL('product','',array('product_id'=>$this->getComplex('product.product_id'),'category_id'=>$this->get('categoryId')))); ?>">
    <?php echo $this->getComplex('product.name'); ?>
  </a>
</h3>
