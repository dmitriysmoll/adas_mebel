<div class="item-price">
  <span><?php echo func_htmlspecialchars($this->getComplex('item.amount')); ?></span>
  <span class="multiplier">x</span>
  <?php $this->getWidget(array('surcharge' => $this->get('item')->getNetPrice(), 'currency' => $this->get('cart')->getCurrency()), 'XLite\View\Surcharge')->display(); ?>
</div>
