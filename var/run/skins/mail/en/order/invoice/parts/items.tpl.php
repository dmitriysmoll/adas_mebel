<table style="border-color: #c4c4c4;border-width:1px;border-collapse: collapse;border-spacing: 0px;max-width: 700px;width: 100%;margin-top: 24px;">
  <tr style="border: 0px none;"><?php $this->displayViewListContent('invoice.items.head'); ?></tr>
  <?php $_foreach_var = $this->get('order')->getItems(); if (isset($_foreach_var)) { $this->itemArraySize=count($_foreach_var); $this->itemArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->index => $this->item){ $this->itemArrayPointer++; ?>
  <tr style="border: 0px none;"><?php $this->displayViewListContent('invoice.item', array('item' => $this->get('item'))); ?></tr>
  <?php }?>
  <?php $w = isset($this->w) ? $this->w : null; $_foreach_var = $this->getViewList('invoice.items'); if (isset($_foreach_var)) { $this->wArraySize=count($_foreach_var); $this->wArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->w){ $this->wArrayPointer++; ?><tr style="border: 0px none;" ><?php echo func_htmlspecialchars($this->get('w')->display()); ?></tr>
<?php } $this->w = $w; ?>
</table>
