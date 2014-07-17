<div class="product-image-gallery"<?php if ($this->get('product')->countImages()==1){?> style="display:none;"<?php }?>>
  <ul>
    <?php $_foreach_var = $this->get('product')->getImages(); if (isset($_foreach_var)) { $this->imageArraySize=count($_foreach_var); $this->imageArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->i => $this->image){ $this->imageArrayPointer++; ?>
    <li <?php echo $this->getListItemClassAttribute($this->get('i')); ?>>
      <a href="<?php echo func_htmlspecialchars($this->get('image')->getFrontURL()); ?>" rel="gallery" rev="width: <?php echo func_htmlspecialchars($this->get('image')->getWidth()); ?>, height: <?php echo func_htmlspecialchars($this->get('image')->getHeight()); ?>" title="<?php echo func_htmlspecialchars($this->get('image')->getAlt()); ?>"><?php $this->getWidget(array('image' => $this->get('image'), 'alt' => $this->getAlt($this->get('image'),$this->get(' i')), 'maxWidth' => '60', 'maxHeight' => '60'), '\XLite\View\Image')->display(); ?></a>
      <?php $this->getWidget(array('className' => 'middle', 'style' => 'display: none;', 'image' => $this->get('image'), 'maxWidth' => $this->getWidgetMaxWidth(), 'maxHeight' => $this->getWidgetMaxWidth(), 'alt' => $this->getAlt($this->get('image'),$this->get(' i'))), '\XLite\View\Image')->display(); ?>
    </li>
    <?php }?>
  </ul>
</div>

<script type="text/javascript">
var lightBoxImagesDir = '<?php echo func_htmlspecialchars($this->getLightBoxImagesDir()); ?>';
</script>
