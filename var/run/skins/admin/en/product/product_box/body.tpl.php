<ul>
  <li>
    <div><?php echo func_htmlspecialchars($this->t('Length x Width x Height')); ?> (<?php echo func_htmlspecialchars($this->getDimSymbol()); ?>):</div>
    <div>
      <input type="text" name="<?php echo func_htmlspecialchars($this->getNamePostedData('boxLength')); ?>" size="9" value="<?php echo func_htmlspecialchars($this->getComplex('product.boxLength')); ?>" />
      x
      <input type="text" name="<?php echo func_htmlspecialchars($this->getNamePostedData('boxWidth')); ?>" size="9" value="<?php echo func_htmlspecialchars($this->getComplex('product.boxWidth')); ?>" />
      x
      <input type="text" name="<?php echo func_htmlspecialchars($this->getNamePostedData('boxHeight')); ?>" size="9" value="<?php echo func_htmlspecialchars($this->getComplex('product.boxHeight')); ?>" />
    </div>
  </li>
  <li>
    <div><?php echo func_htmlspecialchars($this->t('Maximum number of items per box')); ?>:</div>
    <div>
      <input type="text" name="<?php echo func_htmlspecialchars($this->getNamePostedData('itemsPerBox')); ?>" size="8" value="<?php echo func_htmlspecialchars($this->getComplex('product.itemsPerBox')); ?>" />
    </div>
  </li>
</ul>
