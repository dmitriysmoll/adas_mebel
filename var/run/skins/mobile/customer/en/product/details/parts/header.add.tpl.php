<?php if (!($this->isCatalogModeEnabled())){?>
<li data-theme="b" class="add-to-cart-button-top<?php if (!($this->isProductAvailableForSale())){?> ui-disabled<?php }?>">
  <a href="<?php echo func_htmlspecialchars($this->buildURL('product','',array('product_id'=>$this->getComplex('product.product_id'),'category_id'=>$this->getCategoryId()))); ?>" onclick="javascript: return !jQuery('form.product-details').submit();">
    <span class="currency"><?php echo $this->formatPrice($this->getListPrice(),$this->get('null'),1); ?></span>
    <?php if (!($this->isProductAdded())){?><?php echo func_htmlspecialchars($this->t('Add to bag')); ?><?php }else{ ?><?php echo func_htmlspecialchars($this->t('Buy more')); ?><?php }?>
  </a>
</li>
<?php }?>
