<table class="selected-products" cellspacing="0">

  <tbody class="items">
    <?php $item = isset($this->item) ? $this->item : null; $_foreach_var = $this->get('cart')->getItems(); if (isset($_foreach_var)) { $this->itemArraySize=count($_foreach_var); $this->itemArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->item){ $this->itemArrayPointer++; ?><tr class="selected-product" >
      <?php $this->displayViewListContent('cart.item', array('item' => $this->get('item'))); ?>
    </tr>
<?php } $this->item = $item; ?>
  </tbody>

  <tbody class="additional-items">
    <?php $w = isset($this->w) ? $this->w : null; $_foreach_var = $this->getViewList('cart.items'); if (isset($_foreach_var)) { $this->wArraySize=count($_foreach_var); $this->wArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->w){ $this->wArrayPointer++; ?><tr class="selected-product additional-item" >
      <?php echo func_htmlspecialchars($this->get('w')->display()); ?>
    </tr>
<?php } $this->w = $w; ?>
  </tbody>

</table>
