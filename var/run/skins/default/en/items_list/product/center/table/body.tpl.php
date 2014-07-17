<div class="products">

  <?php if ($this->getPageData()): ?><table class="products-table" cellspacing="0" >
    <tr>
      <?php $this->displayInheritedViewListContent('captions'); ?>
    </tr>
    <?php $product = isset($this->product) ? $this->product : null; $_foreach_var = $this->getPageData(); if (isset($_foreach_var)) { $this->productArraySize=count($_foreach_var); $this->productArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->product){ $this->productArrayPointer++; ?><tr  class="product-cell <?php echo func_htmlspecialchars($this->getProductCellClass($this->get('product'))); ?>">
      <?php $column = isset($this->column) ? $this->column : null; $_foreach_var = $this->getInheritedViewList('columns',array('product'=>$this->get('product'))); if (isset($_foreach_var)) { $this->columnArraySize=count($_foreach_var); $this->columnArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->column){ $this->columnArrayPointer++; ?><td ><?php echo func_htmlspecialchars($this->get('column')->display()); ?></td>
<?php } $this->column = $column; ?>
    </tr>
<?php } $this->product = $product; ?>
  </table><?php endif; ?>

  <?php $this->displayNestedViewListContent('buttons'); ?>

</div>
