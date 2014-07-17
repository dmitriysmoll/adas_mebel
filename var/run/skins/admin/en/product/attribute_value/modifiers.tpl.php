<?php if ($this->isModified($this->get('attributeValue'))): ?><div class="modifiers" >
  <a href="#" tabindex="-1"><?php echo func_htmlspecialchars($this->t('Modifiers')); ?></a>
  <span class="text"><?php echo $this->getModifiersAsString($this->get('attributeValue')); ?></span>
  <div class="popup">
    <h4><?php echo func_htmlspecialchars($this->t('Modifiers')); ?></h4>
    <?php $_foreach_var = $this->getModifiers(); if (isset($_foreach_var)) { $this->modifierArraySize=count($_foreach_var); $this->modifierArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->field => $this->modifier){ $this->modifierArrayPointer++; ?>
      <?php $this->getWidget(array('fieldName' => $this->getName($this->get('field'),$this->get('id')), 'label' => $this->t($this->getComplex('modifier.title')), 'value' => $this->getModifierValue($this->get('attributeValue'),$this->get('field')), 'attributes' => array('data-type'=>$this->get('field'))), '\XLite\View\FormField\Input\Text\Modifier')->display(); ?>
    <?php }?>
    <div class="default clearfix"><label><input type="checkbox" name="<?php echo func_htmlspecialchars($this->getName('default',$this->get('id'))); ?>"<?php if ($this->isDefault($this->get('attributeValue'))){?> checked<?php }?> data-title="<?php echo func_htmlspecialchars($this->t('Default')); ?>" /> <?php echo func_htmlspecialchars($this->t('Default option')); ?></label></div>
    <div class="arrow"></div>
  </div>
</div><?php endif; ?>
