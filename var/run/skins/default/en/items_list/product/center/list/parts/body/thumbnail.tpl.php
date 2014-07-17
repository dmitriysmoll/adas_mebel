<td class="box-product">
  <div class="quick-look-cell">
  <div class="quick-look-cell-thumbnail">
    <?php $this->displayNestedViewListContent('quick_look.thumbnail', array('product' => $this->get('product'))); ?>
    <a 
      class="product-thumbnail" 
      href="<?php echo func_htmlspecialchars($this->buildURL('product','',array('product_id'=>$this->getComplex('product.product_id'),'category_id'=>$this->get('categoryId')))); ?>">
      <?php $this->getWidget(array('image' => $this->get('product')->getImage(), 'maxWidth' => $this->getIconWidth(), 'maxHeight' => $this->getIconHeight(), 'alt' => $this->getComplex('product.name'), 'className' => 'photo'), '\XLite\View\Image')->display(); ?>
    </a>
  </div>
  </div>
</td>
