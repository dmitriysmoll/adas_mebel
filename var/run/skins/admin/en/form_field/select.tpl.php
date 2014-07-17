<select <?php echo $this->getAttributesCode(); ?>>
  <?php echo func_htmlspecialchars($this->displayCommentedData($this->getCommentedData())); ?>
  <?php $_foreach_var = $this->getOptions(); if (isset($_foreach_var)) { $this->optionLabelArraySize=count($_foreach_var); $this->optionLabelArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->optionValue => $this->optionLabel){ $this->optionLabelArrayPointer++; ?>
    <?php if ($this->isGroup($this->get('optionLabel'))){?>
      <optgroup <?php echo $this->getOptionGroupAttributesCode($this->get('optionValue'),$this->get('optionLabel')); ?>>
        <?php $_foreach_var = $this->getComplex('optionLabel.options'); if (isset($_foreach_var)) { $this->optionLabel2ArraySize=count($_foreach_var); $this->optionLabel2ArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->optionValue2 => $this->optionLabel2){ $this->optionLabel2ArrayPointer++; ?>
          <option <?php echo $this->getOptionAttributesCode($this->get('optionValue2')); ?>><?php echo func_htmlspecialchars($this->get('optionLabel2')); ?></option>
        <?php }?>
      </optgroup>
    <?php }else{ ?>
      <option <?php echo $this->getOptionAttributesCode($this->get('optionValue')); ?>><?php echo $this->flexyModifierCall('stripTags', $this->get('optionLabel')); ?></option>
    <?php }?>
  <?php }?>
</select>
