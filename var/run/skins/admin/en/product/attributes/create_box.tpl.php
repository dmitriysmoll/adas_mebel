<li class="create-tpl clearfix" style="display:none">
  <div class="attribute-name">
   <?php $this->getWidget(array('fieldName' => 'newValue[NEW_ID][name]', 'fieldOnly' => 'true', 'required' => 'true', 'attributes' => array('placeholder'=>$this->t('Attribute name'))), 'XLite\View\FormField\Input\Text')->display(); ?>
    <input type="hidden" name="newValue[NEW_ID][listId]" value="NEW_LIST_ID" /> 
    <input type="hidden" name="newValue[NEW_ID][type]" value="NEW_TYPE" /> 
  </div>
  <?php $_foreach_var = $this->getDefaultWidgets(); if (isset($_foreach_var)) { $this->wArraySize=count($_foreach_var); $this->wArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->w){ $this->wArrayPointer++; ?>
    <?php echo func_htmlspecialchars($this->get('w')->display()); ?>
  <?php }?>
  <div class="actions">
    <?php $this->getWidget(array('label' => $this->t('Removing this attribute will affect all the products. Leave this blank to hide this option for the product.'), 'style' => 'delete'), 'XLite\View\Button\Remove')->display(); ?>
  </div>
</li>
