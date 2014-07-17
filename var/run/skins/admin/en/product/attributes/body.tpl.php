<div class="<?php echo func_htmlspecialchars($this->getBlockStyle()); ?>">
  <div class="header clearfix">
    <span class="title"><?php echo func_htmlspecialchars($this->getTitle()); ?></span>
    <?php if ($this->getTooltip()):
  $this->getWidget(array('text' => $this->getTooltip(), 'isImageTag' => 'true', 'className' => 'help-icon'), '\XLite\View\Tooltip')->display();
endif; ?>
    <?php $this->getWidget(array('listId' => $this->getListId()), '\XLite\View\Button\Dropdown\AddAttribute')->display(); ?>
  </div>
  <ul class="data" id="list<?php echo func_htmlspecialchars($this->getListId()); ?>">
    <?php $a = isset($this->a) ? $this->a : null; $_foreach_var = $this->getAttributesList(); if (isset($_foreach_var)) { $this->aArraySize=count($_foreach_var); $this->aArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->id => $this->a){ $this->aArrayPointer++; ?><li  class="line clearfix attribute">
      <div class="attribute-name">
        <?php echo func_htmlspecialchars($this->getComplex('a.name')->display()); ?>
      </div>
      <?php echo func_htmlspecialchars($this->getComplex('a.value')->display()); ?>
      <div class="actions">
        <?php $this->getWidget(array('buttonName' => 'delete['.$this->get('id').']', 'label' => $this->t('Removing this attribute will affect all the products. Leave this blank to hide this option for the product.'), 'style' => 'delete'), 'XLite\View\Button\Remove')->display(); ?>
      </div>
    </li>
<?php } $this->a = $a; ?>
    <?php if (!($this->getAttributesList())): ?><li  class="list-empty">
      <?php echo func_htmlspecialchars($this->t('No attributes assigned')); ?>
    </li><?php endif; ?>
  </ul>
</div>
<?php $_foreach_var = $this->getAttributeGroups(); if (isset($_foreach_var)) { $this->groupArraySize=count($_foreach_var); $this->groupArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->group){ $this->groupArrayPointer++; ?>
  <?php $this->getWidget(array('group' => $this->get('group')), 'XLite\View\Product\Details\Admin\Attributes')->display(); ?>
<?php }?>
