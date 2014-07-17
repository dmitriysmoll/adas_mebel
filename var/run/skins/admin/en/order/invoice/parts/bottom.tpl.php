<table cellspacing="0" class="addresses">

    <?php if ($this->isPaymentShippingSectionVisible()): ?><tr >
      <?php if ($this->isShippingSectionVisible()): ?><td  class="address shipping">
        <div class="wrapper<?php if (!($this->getComplex('order.trackingNumbers')->isEmpty())){?> tracking-info-section-included<?php }?>">
        <?php $this->displayViewListContent('invoice.bottom.address.shipping', array('baddress' => $this->getComplex('order.profile.billing_address'), 'saddress' => $this->getComplex('order.profile.shipping_address'))); ?>
        </div>
      </td><?php endif; ?>
      <?php if ($this->isPaymentSectionVisible()): ?><td  class="address payment">
        <div class="wrapper">
        <?php $this->displayViewListContent('invoice.bottom.address.billing', array('baddress' => $this->getComplex('order.profile.billing_address'), 'saddress' => $this->getComplex('order.profile.shipping_address'))); ?>
        </div>
      </td><?php endif; ?>
    </tr><?php endif; ?>

    <?php $w = isset($this->w) ? $this->w : null; $_foreach_var = $this->getViewList('invoice.bottom'); if (isset($_foreach_var)) { $this->wArraySize=count($_foreach_var); $this->wArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->w){ $this->wArrayPointer++; ?><tr >
      <?php echo func_htmlspecialchars($this->get('w')->display()); ?>
    </tr>
<?php } $this->w = $w; ?>

</table>
