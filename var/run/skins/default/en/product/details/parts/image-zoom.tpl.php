<div class="product-photo">
  <a href="<?php echo func_htmlspecialchars($this->getZoomImageURL()); ?>" class="cloud-zoom" id="pimage_<?php echo func_htmlspecialchars($this->getComplex('product.product_id')); ?>" rel="adjustX: <?php echo func_htmlspecialchars($this->getZoomAdjustX()); ?>, showTitle: false, tintOpacity: 0.5, tint: '#fff', lensOpacity: 0" title="<?php echo func_htmlspecialchars($this->t('Thumbnail')); ?>">
  <?php $this->getWidget(array('image' => $this->get('product')->getImage(), 'className' => 'photo product-thumbnail', 'id' => 'product_image_'.$this->getComplex('product.product_id'), 'verticalAlign' => 'top', 'alt' => $this->t('Thumbnail'), 'maxWidth' => $this->getWidgetMaxWidth(), 'maxHeight' => $this->getWidgetMaxHeight()), '\XLite\View\Image')->display(); ?>
<?php echo func_htmlspecialchars($this->displayCommentedData($this->getJSData())); ?>
  </a>
</div>
