<?php $surcharge = isset($this->surcharge) ? $this->surcharge : null; $_foreach_var = $this->getSurchargeTotals(); if (isset($_foreach_var)) { $this->surchargeArraySize=count($_foreach_var); $this->surchargeArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->sType => $this->surcharge){ $this->surchargeArrayPointer++; ?><li  style="list-style: none;padding: 0px;margin: 0px;color: #5a5a5a;">
  <?php if ($this->getComplex('surcharge.count')=='1'){?>
    <div style="display: inline-block;color: #5a5a5a;">
      <?php echo func_htmlspecialchars($this->getComplex('surcharge.lastName')); ?>:
      <?php $this->displayViewListContent('invoice.base.totals.modifier.name', array('surcharge' => $this->get('surcharge'), 'sType' => $this->get('sType'), 'order' => $this->get('order'))); ?>
    </div>
  <?php }else{ ?>
    <div style="display:inline-block;color: #5a5a5a;">
      <?php echo func_htmlspecialchars($this->getComplex('surcharge.name')); ?>:
      <?php $this->displayViewListContent('invoice.base.totals.modifier.name', array('surcharge' => $this->get('surcharge'), 'sType' => $this->get('sType'), 'order' => $this->get('order'))); ?>
    </div>
  <?php }?>
  <div style="display: inline-block;color: #5a5a5a;">
    <?php if ($this->getComplex('surcharge.available')){?><?php echo func_htmlspecialchars($this->formatSurcharge($this->get('surcharge'))); ?><?php }else{ ?><?php echo func_htmlspecialchars($this->t('n/a')); ?><?php }?>
    <?php $this->displayViewListContent('invoice.base.totals.modifier.value', array('surcharge' => $this->get('surcharge'), 'sType' => $this->get('sType'), 'order' => $this->get('order'))); ?>
  </div>
</li>
<?php } $this->surcharge = $surcharge; ?>
