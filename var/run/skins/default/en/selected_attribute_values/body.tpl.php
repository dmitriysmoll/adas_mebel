<div class="item-attribute-values">
  <ul class="selected-attribute-values">
    <?php $_foreach_var = $this->get('item')->getSortedAttributeValues(); if (isset($_foreach_var)) { $this->optionArraySize=count($_foreach_var); $this->optionArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->option){ $this->optionArrayPointer++; ?>
      <li>
        <span><?php echo func_htmlspecialchars($this->get('option')->getActualName()); ?>:</span>
        <?php echo func_htmlspecialchars($this->get('option')->getActualValue()); ?><?php if (!($this->get('optionArrayPointer')==$this->get('optionArraySize'))){?>, <?php }?>
      </li>
    <?php }?>
  </ul>
  
  <?php if ($this->getParam('source')): ?><div  class="item-change-attribute-values">
    <a href="<?php echo func_htmlspecialchars($this->getChangeAttributeValuesLink()); ?>"><?php echo func_htmlspecialchars($this->t('Change attributes')); ?></a>
  </div><?php endif; ?>
</div>
