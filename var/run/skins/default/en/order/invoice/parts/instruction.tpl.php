<?php if ($this->getPaymentInstructions()): ?><div  class="payment-instruction">
  <?php $method = isset($this->method) ? $this->method : null; $_foreach_var = $this->getPaymentInstructions(); if (isset($_foreach_var)) { $this->methodArraySize=count($_foreach_var); $this->methodArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->method){ $this->methodArrayPointer++; ?><p ><?php echo $this->get('method')->getInstruction(); ?></p>
<?php } $this->method = $method; ?>
</div><?php endif; ?>
