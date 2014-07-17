<a 
  href="<?php echo func_htmlspecialchars($this->buildURL('product','',array('product_id'=>$this->getComplex('product.product_id'),'category_id'=>$this->get('categoryId')))); ?>" 
  class="product-link">
  <?php echo $this->getComplex('product.name'); ?>
</a>
