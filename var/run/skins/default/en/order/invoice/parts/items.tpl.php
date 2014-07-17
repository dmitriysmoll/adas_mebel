<table cellspacing="0" class="items">
  <tr><?php $this->displayViewListContent('invoice.items.head'); ?></tr>
  <?php $_foreach_var = $this->get('order')->getItems(); if (isset($_foreach_var)) { $this->itemArraySize=count($_foreach_var); $this->itemArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->index => $this->item){ $this->itemArrayPointer++; ?>
  <tr><?php $this->displayViewListContent('invoice.item', array('item' => $this->get('item'))); ?></tr>
  <?php }?>
  <?php $w = isset($this->w) ? $this->w : null; $_foreach_var = $this->getViewList('invoice.items'); if (isset($_foreach_var)) { $this->wArraySize=count($_foreach_var); $this->wArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->w){ $this->wArrayPointer++; ?><tr ><?php echo func_htmlspecialchars($this->get('w')->display()); ?></tr>
<?php } $this->w = $w; ?>
</table>
