<div class="price-row">
  <span class="price-parts subtotal<?php if ($this->get('item')->getExcludeSurcharges()){?> modified-subtotal<?php }?>">
    <?php $this->getWidget(array('surcharge' => $this->get('item')->getTotal(), 'currency' => $this->get('cart')->getCurrency()), 'XLite\View\Surcharge')->display(); ?>
  </span>
</div>

<div class="clearing"></div>

<?php if ($this->get('item')->getExcludeSurcharges()): ?><div  class="including-modifiers display-none">
  <table class="including-modifiers" cellspacing="0">
    <?php $surcharge = isset($this->surcharge) ? $this->surcharge : null; $_foreach_var = $this->get('item')->getExcludeSurcharges(); if (isset($_foreach_var)) { $this->surchargeArraySize=count($_foreach_var); $this->surchargeArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->surcharge){ $this->surchargeArrayPointer++; ?><tr >
      <td class="name">
        <?php echo func_htmlspecialchars($this->t('Including X',array('name'=>$this->get('surcharge')->getName()))); ?>:
      </td>
      <td class="value">
        <?php $this->getWidget(array('surcharge' => $this->get('surcharge')->getValue(), 'currency' => $this->get('cart')->getCurrency()), 'XLite\View\Surcharge')->display(); ?>
      </td>
    </tr>
<?php } $this->surcharge = $surcharge; ?>
  </table>
</div><?php endif; ?>
<?php $this->displayViewListContent('cart.item.actions', array('item' => $this->get('item'))); ?>
