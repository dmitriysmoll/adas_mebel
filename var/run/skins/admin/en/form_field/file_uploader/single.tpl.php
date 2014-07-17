<div<?php echo $this->getDataCode(); ?>>
  <?php $this->getWidget(array('object' => $this->getValue(), 'maxWidth' => $this->getMaxWidth(), 'maxHeight' => $this->getMaxHeight(), 'isImage' => $this->isImage(), 'fieldName' => $this->getName()), 'XLite\View\FileUploader')->display(); ?>
</div>
