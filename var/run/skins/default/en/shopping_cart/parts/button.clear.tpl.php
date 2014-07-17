<?php $this->getWidget(array(), '\XLite\View\Form\Cart\Clear', 'clearCart')->display(); ?>
  <div>
    <a
      href="<?php echo func_htmlspecialchars($this->buildURL('cart','clear')); ?>"
      onclick="javascript: return confirm('<?php echo func_htmlspecialchars($this->t('You are sure to clear your cart?')); ?>') && !jQuery(this).parents('form').eq(0).submit();"
      class="clear-bag"><?php echo func_htmlspecialchars($this->t('Clear bag')); ?></a>
  </div>
<?php $this->getWidget(array('end' => '1'), null, 'clearCart')->display(); ?>
