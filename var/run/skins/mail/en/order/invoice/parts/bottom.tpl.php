<table style="border-color: #cadce8;width: 100%;max-width: 700px;">

    <?php if ($this->isPaymentShippingSectionVisible()): ?><tr >
      <?php if ($this->isShippingSectionVisible()): ?><td  style="padding-top: 20px;padding-right: 15px;width: 90%;font-size: 15px;vertical-align: top;">
        <div style="position: relative;min-width: 300px;background: #f9f9f9;height: 330px;border-radius: 6px;padding: 20px;">
        <?php $this->displayViewListContent('invoice.bottom.address.shipping', array('baddress' => $this->getComplex('order.profile.billing_address'), 'saddress' => $this->getComplex('order.profile.shipping_address'))); ?>
        </div>
      </td><?php endif; ?>
      <?php if ($this->isPaymentSectionVisible()): ?><td  style="padding-top: 20px;padding-right: 0px;width: 50%;font-size: 15px;vertical-align: top;">
        <div style="position: relative;min-width: 300px;background: #f9f9f9;height: 330px;border-radius: 6px;padding: 20px;">
        <?php $this->displayViewListContent('invoice.bottom.address.billing', array('baddress' => $this->getComplex('order.profile.billing_address'), 'saddress' => $this->getComplex('order.profile.shipping_address'))); ?>
        </div>
      </td><?php endif; ?>
    </tr><?php endif; ?>

    <?php $w = isset($this->w) ? $this->w : null; $_foreach_var = $this->getViewList('invoice.bottom'); if (isset($_foreach_var)) { $this->wArraySize=count($_foreach_var); $this->wArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->w){ $this->wArrayPointer++; ?><tr >
      <?php echo func_htmlspecialchars($this->get('w')->display()); ?>
    </tr>
<?php } $this->w = $w; ?>

</table>
