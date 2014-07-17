<div class="add-button-wrapper <?php echo func_htmlspecialchars($this->getFingerprint()); ?>">
  <?php if (!($this->isOutOfStock())):
  $this->getWidget(array('label' => 'Add to cart', 'style' => 'regular-main-button add2cart'), '\XLite\View\Button\Submit')->display();
endif; ?>
</div>
