<?php if (!($this->get('cart')->checkCart())): ?><li class="disabled-reason" >
  <div class="reason-details"><?php echo $this->getDisabledReason(); ?></div>
</li><?php endif; ?>
