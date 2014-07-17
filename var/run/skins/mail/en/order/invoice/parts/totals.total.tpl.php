<li style="list-style: none;color: #000000;padding-top: 10px;">
  <div style="font-weight: bold;font-size: 20px;display: inline-block;"><?php echo func_htmlspecialchars($this->t('Grand total')); ?>:</div>
  <div style="font-weight: bold;font-size: 20px;display: inline-block;"><?php echo func_htmlspecialchars($this->formatPrice($this->get('order')->getTotal(),$this->get('order')->getCurrency())); ?></div>
</li>
