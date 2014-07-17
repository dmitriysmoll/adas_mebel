<?php if ($this->getMessage()){?>
  <li role="presentation" class="dropdown-header message">
    <i class="fa fa-exclamation-triangle"></i> <?php echo func_htmlspecialchars($this->getMessage()); ?>
  </li>
  <li role="presentation" class="divider"></li>
<?php }?>
