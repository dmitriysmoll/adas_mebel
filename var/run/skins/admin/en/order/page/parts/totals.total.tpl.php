<li class="total">
  <div class="title"><?php echo func_htmlspecialchars($this->t('Grand total')); ?>:</div>
  <div class="value"><?php echo func_htmlspecialchars($this->formatPrice($this->get('order')->getTotal(),$this->get('order')->getCurrency())); ?></div>
</li>
