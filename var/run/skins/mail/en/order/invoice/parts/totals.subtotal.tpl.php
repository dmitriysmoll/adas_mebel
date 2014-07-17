<li style="list-style: none;color: #000000;padding: 0px;">
  <div style="display: inline-block;color: #5a5a5a;"><?php echo func_htmlspecialchars($this->t('Subtotal')); ?>:</div>
  <div style="display: inline-block;color: #5a5a5a;"><?php echo func_htmlspecialchars($this->formatPrice($this->get('order')->getSubtotal(),$this->get('order')->getCurrency())); ?></div>
</li>
