<?php if ($this->isViewListVisible('product.details.page.image.photo')): ?><table class="product-photo-box" >
  <tr>
    <?php $item = isset($this->item) ? $this->item : null; $_foreach_var = $this->getViewList('product.details.page.image.photo'); if (isset($_foreach_var)) { $this->itemArraySize=count($_foreach_var); $this->itemArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->item){ $this->itemArrayPointer++; ?><td ><?php echo func_htmlspecialchars($this->get('item')->display()); ?></td>
<?php } $this->item = $item; ?>
  </tr>
</table><?php endif; ?>
