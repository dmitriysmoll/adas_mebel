<?php $surcharge = isset($this->surcharge) ? $this->surcharge : null; $_foreach_var = $this->getSurchargeTotals(); if (isset($_foreach_var)) { $this->surchargeArraySize=count($_foreach_var); $this->surchargeArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->sType => $this->surcharge){ $this->surchargeArrayPointer++; ?><li  class="<?php echo func_htmlspecialchars($this->getSurchargeClassName($this->get('sType'),$this->get('surcharge'))); ?>">
  <?php if ($this->getComplex('surcharge.count')=='1'){?>
    <strong><?php echo func_htmlspecialchars($this->getComplex('surcharge.lastName')); ?>:</strong>
  <?php }else{ ?>
    <strong class="list-owner"><?php echo func_htmlspecialchars($this->getComplex('surcharge.name')); ?>:</strong>
  <?php }?>
  <?php if ($this->getComplex('surcharge.available')){?>
    <span class="value"><?php $this->getWidget(array('surcharge' => $this->formatSurcharge($this->get('surcharge')), 'currency' => $this->get('cart')->getCurrency()), 'XLite\View\Surcharge')->display(); ?></span>
  <?php }else{ ?>
    <span><?php echo func_htmlspecialchars($this->t('n/a')); ?></span>
  <?php }?>
  <?php if ($this->getComplex('surcharge.count')=='1'){?>
    <?php $this->displayNestedViewListContent('modifier', array('surcharge' => $this->get('surcharge'), 'sType' => $this->get('sType'), 'cart' => $this->get('cart'))); ?>
  <?php }else{ ?>
    <div style="display: none;" class="order-modifier-details">
      <ul>
        <?php $row = isset($this->row) ? $this->row : null; $_foreach_var = $this->getExcludeSurchargesByType($this->get('sType')); if (isset($_foreach_var)) { $this->rowArraySize=count($_foreach_var); $this->rowArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->row){ $this->rowArrayPointer++; ?><li >
          <span class="name"><?php echo func_htmlspecialchars($this->get('row')->getName()); ?>:</span>
          <span class="value"><?php $this->getWidget(array('surcharge' => $this->get('row')->getValue(), 'currency' => $this->get('cart')->getCurrency()), 'XLite\View\Surcharge')->display(); ?></span>
        </li>
<?php } $this->row = $row; ?>
      </ul>
    </div>
  <?php }?>
</li>
<?php } $this->surcharge = $surcharge; ?>
