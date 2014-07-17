<td>
  <input type="text" class="inventory<?php if (!($this->getComplex('product.inventory')->getEnabled())){?> input-disabled<?php }?>" size="10" value="<?php echo str_replace('"', '&quot;',$this->getComplex('product.inventory')->getAmount()); ?>" name="<?php echo func_htmlspecialchars($this->getNamePostedData('amount',$this->get('product')->getProductId())); ?>" <?php if (!($this->getComplex('product.inventory')->getEnabled())) { echo 'disabled="disabled"'; } ?> />
</td>
