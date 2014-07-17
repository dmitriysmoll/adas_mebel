<div<?php echo $this->getDataCode(); ?> class="multiple-files">
<?php $_foreach_var = $this->getValue(); if (isset($_foreach_var)) { $this->objectArraySize=count($_foreach_var); $this->objectArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->object){ $this->objectArrayPointer++; ?>
  <?php $this->getWidget(array('object' => $this->get('object'), 'maxWidth' => $this->getMaxWidth(), 'maxHeight' => $this->getMaxHeight(), 'isImage' => $this->isImage(), 'fieldName' => $this->getName(), 'multiple' => 'true'), 'XLite\View\FileUploader')->display(); ?>
<?php }?>
  <?php $this->getWidget(array('maxWidth' => $this->getMaxWidth(), 'maxHeight' => $this->getMaxHeight(), 'isImage' => $this->isImage(), 'fieldName' => $this->getName(), 'multiple' => 'true'), 'XLite\View\FileUploader')->display(); ?>
</div>
