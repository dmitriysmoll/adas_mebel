<ul cellspacing="0" class="addresses">

  <?php if ($this->isShippingSectionVisible()): ?><li  class="address shipping">
    <div class="wrapper<?php if (!($this->getComplex('order.trackingNumbers')->isEmpty())){?> tracking-info-section-included<?php }?>">
    <?php $this->displayViewListContent('invoice.bottom.address.shipping', array('baddress' => $this->getComplex('order.profile.billing_address'), 'saddress' => $this->getComplex('order.profile.shipping_address'))); ?>
    </div>
	</li><?php endif; ?>
  <?php if ($this->isPaymentSectionVisible()): ?><li  class="address payment<?php if ($this->isShippingSectionVisible()){?> payment-wrapping<?php }?>">
    <div class="wrapper">
    <?php $this->displayViewListContent('invoice.bottom.address.billing', array('baddress' => $this->getComplex('order.profile.billing_address'), 'saddress' => $this->getComplex('order.profile.shipping_address'))); ?>
    </div>
  </li><?php endif; ?>

  <?php $w = isset($this->w) ? $this->w : null; $_foreach_var = $this->getViewList('invoice.bottom'); if (isset($_foreach_var)) { $this->wArraySize=count($_foreach_var); $this->wArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->w){ $this->wArrayPointer++; ?><li >
  <?php echo func_htmlspecialchars($this->get('w')->display()); ?>
  </li>
<?php } $this->w = $w; ?>

</ul>
