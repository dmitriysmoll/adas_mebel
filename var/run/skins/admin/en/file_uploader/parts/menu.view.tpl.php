<?php if ($this->hasView()){?>
  <li role="presentation">
    <a role="menuitem" tabindex="-1" href="<?php echo func_htmlspecialchars($this->get('object')->getFrontURL()); ?>" target="_blank">
      <i class="button-icon fa fa-picture-o"></i>
      <span><?php echo func_htmlspecialchars($this->t('View image')); ?></span>
    </a>
  </li>
  <li role="presentation" class="divider"></li>
<?php }?>
