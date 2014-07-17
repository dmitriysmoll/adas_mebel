<div class="product-photo">
<?php $this->getWidget(array('image' => $this->get('product')->getImage(), 'className' => 'photo product-thumbnail', 'id' => 'product_image_'.$this->getComplex('product.product_id'), 'verticalAlign' => 'top', 'alt' => $this->t('Thumbnail'), 'maxWidth' => $this->getWidgetMaxWidth(), 'maxHeight' => $this->getWidgetMaxHeight()), '\XLite\View\Image')->display(); ?>
<?php echo func_htmlspecialchars($this->displayCommentedData($this->getJSData())); ?>
</div>
