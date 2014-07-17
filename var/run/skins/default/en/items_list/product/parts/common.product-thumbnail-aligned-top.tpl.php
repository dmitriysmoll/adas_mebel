<a 
  href="<?php echo func_htmlspecialchars($this->buildURL('product','',array('product_id'=>$this->getComplex('product.product_id'),'category_id'=>$this->get('categoryId')))); ?>" 
  class="product-thumbnail" 
  title="<?php echo func_htmlspecialchars($this->t('Thumbnail')); ?>">
  <?php $this->getWidget(array('image' => $this->get('product')->getImage(), 'maxWidth' => $this->getIconWidth(), 'maxHeight' => $this->getIconHeight(), 'alt' => $this->getComplex('product.name'), 'verticalAlign' => 'top', 'className' => 'photo'), '\XLite\View\Image')->display(); ?>
</a>
