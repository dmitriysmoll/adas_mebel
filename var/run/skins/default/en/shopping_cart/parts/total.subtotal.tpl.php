<li class="subtotal">
  <strong><?php echo func_htmlspecialchars($this->t('Subtotal')); ?>:</strong>
  <span class="cart-subtotal<?php if ($this->get('cart')->getItemsIncludeSurchargesTotals()){?> modified-subtotal<?php }?>"><?php $this->getWidget(array('surcharge' => $this->get('cart')->getSubtotal(), 'currency' => $this->get('cart')->getCurrency()), 'XLite\View\Surcharge')->display(); ?></span>
  <?php if ($this->get('cart')->getItemsIncludeSurchargesTotals()): ?><div  class="including-modifiers" style="display: none;">
    <table class="including-modifiers" cellspacing="0">
      <?php $row = isset($this->row) ? $this->row : null; $_foreach_var = $this->get('cart')->getItemsIncludeSurchargesTotals(); if (isset($_foreach_var)) { $this->rowArraySize=count($_foreach_var); $this->rowArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->row){ $this->rowArrayPointer++; ?><tr >
        <td class="name"><?php echo func_htmlspecialchars($this->t('Including X',array('name'=>$this->getComplex('row.surcharge')->getName()))); ?>:</td>
        <td class="value"><?php $this->getWidget(array('surcharge' => $this->getComplex('row.cost'), 'currency' => $this->get('cart')->getCurrency()), 'XLite\View\Surcharge')->display(); ?></td>
      </tr>
<?php } $this->row = $row; ?>
    </table>
  </div><?php endif; ?>
</li>
