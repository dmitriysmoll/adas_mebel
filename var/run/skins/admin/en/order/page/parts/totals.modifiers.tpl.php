<?php $surcharge = isset($this->surcharge) ? $this->surcharge : null; $_foreach_var = $this->getSurchargeTotals(); if (isset($_foreach_var)) { $this->surchargeArraySize=count($_foreach_var); $this->surchargeArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->sType => $this->surcharge){ $this->surchargeArrayPointer++; ?><li  class="<?php echo func_htmlspecialchars($this->getSurchargeClassName($this->get('sType'),$this->get('surcharge'))); ?>">
  <?php if ($this->getComplex('surcharge.count')=='1'){?>
    <div class="title">
      <?php echo func_htmlspecialchars($this->getComplex('surcharge.lastName')); ?>:
      <?php $this->displayViewListContent('order.base.totals.modifier.name', array('surcharge' => $this->get('surcharge'), 'sType' => $this->get('sType'), 'order' => $this->get('order'))); ?>
    </div>
  <?php }else{ ?>
    <div class="title list-owner">
      <?php echo func_htmlspecialchars($this->getComplex('surcharge.name')); ?>:
      <?php $this->displayViewListContent('order.base.totals.modifier.name', array('surcharge' => $this->get('surcharge'), 'sType' => $this->get('sType'), 'order' => $this->get('order'))); ?>
    </div>
  <?php }?>
  <div class="value">
    <?php if ($this->getComplex('surcharge.available')){?>
      <?php echo func_htmlspecialchars($this->formatSurcharge($this->get('surcharge'))); ?>
    <?php }else{ ?>
      <?php echo func_htmlspecialchars($this->t('n/a')); ?>
    <?php }?>
    <?php $this->displayViewListContent('order.base.totals.modifier.value', array('surcharge' => $this->get('surcharge'), 'sType' => $this->get('sType'), 'order' => $this->get('order'))); ?>
  </div>
</li>
<?php } $this->surcharge = $surcharge; ?>
