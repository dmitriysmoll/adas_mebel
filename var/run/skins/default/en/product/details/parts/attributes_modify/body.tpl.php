<ul class="attribute-values">
  <?php $attribute = isset($this->attribute) ? $this->attribute : null; $_foreach_var = $this->getAttributes(); if (isset($_foreach_var)) { $this->attributeArraySize=count($_foreach_var); $this->attributeArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->attribute){ $this->attributeArrayPointer++; ?><li >
    <?php $this->getWidget(array('attribute' => $this->get('attribute')), $this->get('attribute')->getWidgetClass($this->get('attribute')->getType()))->display(); ?>
  </li>
<?php } $this->attribute = $attribute; ?>
</ul>
