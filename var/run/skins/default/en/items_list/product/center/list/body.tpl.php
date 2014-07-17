<?php $this->displayViewListContent('itemsList.product.cart'); ?>

<div class="products">

  <?php if ($this->getPageData()): ?><ul class="products-list" >
    <?php $product = isset($this->product) ? $this->product : null; $_foreach_var = $this->getPageData(); if (isset($_foreach_var)) { $this->productArraySize=count($_foreach_var); $this->productArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->product){ $this->productArrayPointer++; ?><li  class="product-cell">

      <table class="<?php echo func_htmlspecialchars($this->getProductCellClass($this->get('product'))); ?>">
        <tr>
          <td class="product-photo">
            <div class="product-photo" style="width: <?php echo func_htmlspecialchars($this->getIconWidth()); ?>px;">
              <?php $this->displayInheritedViewListContent('photo', array('product' => $this->get('product'))); ?>
              <?php if ($this->get('product')->hasImage()): ?><div >
                <?php $this->displayInheritedViewListContent('quicklook', array('product' => $this->get('product'))); ?>
              </div><?php endif; ?>
            </div>
          </td>
          <td class="product-info">
            <div class="product-info">
              <?php $this->displayInheritedViewListContent('info', array('product' => $this->get('product'))); ?>
              <?php if (!($this->get('product')->hasImage())): ?><div >
                <?php $this->displayInheritedViewListContent('quicklook', array('product' => $this->get('product'))); ?>
              </div><?php endif; ?>
            </div>
          </td>
        </tr>
      </table>

    </li>
<?php } $this->product = $product; ?>
  </ul><?php endif; ?>

</div>
