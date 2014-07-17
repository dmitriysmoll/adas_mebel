<li>
  <div class="title"><?php echo func_htmlspecialchars($this->t('Subtotal')); ?>:</div>
  <div class="value"><?php echo func_htmlspecialchars($this->formatPrice($this->get('order')->getSubtotal(),$this->get('order')->getCurrency())); ?></div>
</li>
