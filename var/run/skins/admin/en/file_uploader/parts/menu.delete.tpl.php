<?php if ($this->hasFile()){?>
  <li role="presentation" class="divider"></li>
  <li role="presentation">
    <a role="menuitem" tabindex="-1" href="#" class="delete">
      <i class="button-icon fa fa-trash-o"></i>
      <span><?php echo func_htmlspecialchars($this->t('Delete')); ?></span>
    </a>
  </li>
  <li role="presentation" class="undelete">
    <a role="menuitem" tabindex="-1" href="#" class="delete">
      <div class="diagonal"></div>
      <i class="button-icon fa fa-trash-o"></i>
      <span><?php echo func_htmlspecialchars($this->t('Undelete')); ?></span>
    </a>
  </li>
<?php }?>
