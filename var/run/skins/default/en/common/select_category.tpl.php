<select name="<?php echo func_htmlspecialchars($this->getParam('fieldName')); ?>" size="<?php echo func_htmlspecialchars($this->getParam('size')); ?>" <?php if ($this->get('nonFixed')){?> style="width:200pt" class="form-control" <?php }else{ ?>  class="FixedSelect form-control" <?php }?>  >
  <?php if ($this->getParam('allOption')): ?><option value="" ><?php echo func_htmlspecialchars($this->t('All')); ?></option><?php endif; ?>
  <?php if ($this->getParam('noneOption')): ?><option value="" ><?php echo func_htmlspecialchars($this->t('None')); ?></option><?php endif; ?>
  <?php if ($this->getParam('rootOption')): ?><option value=""  class="CenterBorder"><?php echo func_htmlspecialchars($this->t('Root level')); ?></option><?php endif; ?>
	<?php $_foreach_var = $this->getCategories(); if (isset($_foreach_var)) { $this->categoryArraySize=count($_foreach_var); $this->categoryArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->key => $this->category){ $this->categoryArrayPointer++; ?>
    <?php if (!($this->getArrayField($this->get('category'),'category_id')==$this->getParam('currentCategoryId'))): ?><option
      
      value="<?php echo func_htmlspecialchars($this->getArrayField($this->get('category'),'category_id')); ?>"
      <?php if ($this->isCategorySelected($this->get('category'))) { echo 'selected="selected"'; } ?>>
        <?php echo func_htmlspecialchars($this->getIndentationString($this->get('category'),3,'-')); ?> <?php echo $this->getCategoryName($this->get('category')); ?>
    </option><?php endif; ?>
  <?php }?>
  <?php if ($this->isDisplayNoCategories()): ?><option value="" ><?php echo func_htmlspecialchars($this->t('-- No categories --')); ?></option><?php endif; ?>
</select>
