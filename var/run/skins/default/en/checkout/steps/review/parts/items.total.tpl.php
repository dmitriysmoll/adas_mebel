<hr />

<div class="total clearfix">
  <?php echo func_htmlspecialchars($this->t('Total')); ?>:
  <span class="value"><?php $this->getWidget(array('surcharge' => $this->get('cart')->getTotal(), 'currency' => $this->get('cart')->getCurrency()), 'XLite\View\Surcharge')->display(); ?></span>
</div>
