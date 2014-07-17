<?php if ($this->hasPaymentTransactionSums()): ?><ul  class="payment-sums">
  <?php $sum = isset($this->sum) ? $this->sum : null; $_foreach_var = $this->getPaymentTransactionSums(); if (isset($_foreach_var)) { $this->sumArraySize=count($_foreach_var); $this->sumArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->label => $this->sum){ $this->sumArrayPointer++; ?><li >
    <?php echo func_htmlspecialchars($this->get('label')); ?>: <?php echo func_htmlspecialchars($this->formatPrice($this->get('sum'),$this->get('order')->getCurrency())); ?>
  </li>
<?php } $this->sum = $sum; ?>
</ul><?php endif; ?>
