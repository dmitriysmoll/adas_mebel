<li class="total">
  <strong><?php echo func_htmlspecialchars($this->t('Total')); ?>:</strong>
  <?php $this->getWidget(array('surcharge' => $this->get('cart')->getTotal(), 'currency' => $this->get('cart')->getCurrency()), 'XLite\View\Surcharge')->display(); ?>
</li>
