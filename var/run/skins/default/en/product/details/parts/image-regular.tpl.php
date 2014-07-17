<div class="product-photo">
  <?php $this->getWidget(array('image' => $this->get('product')->getImage(), 'className' => 'photo product-thumbnail', 'verticalAlign' => 'top', 'id' => 'product_image_'.$this->getComplex('product.product_id'), 'maxWidth' => $this->getWidgetMaxWidth(), 'maxHeight' => $this->getWidgetMaxHeight(), 'alt' => $this->t('Thumbnail')), '\XLite\View\Image')->display(); ?>
</div>
