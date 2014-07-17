<ul class="cart-sums">
  <li>
    <em><?php echo func_htmlspecialchars($this->t('Subtotal')); ?>:</em>
    <span><?php echo func_htmlspecialchars($this->formatPrice($this->get('cart')->getSubtotal(),$this->get('cart')->getCurrency())); ?></span>
  </li>
</ul>
