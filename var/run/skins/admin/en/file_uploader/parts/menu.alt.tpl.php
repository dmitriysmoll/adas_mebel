<?php if ($this->hasAlt()){?>
  <li role="presentation" class="divider"></li>
  <li role="presentation" class="alt-text">
    <div class="value">
      <b><?php echo func_htmlspecialchars($this->t('Alt')); ?>:</b>
      <span><?php echo func_htmlspecialchars($this->getComplex('object.alt')); ?></span>
      <div class="right-fade"></div>
    </div>
    <div class="input-group input-group-sm">
      <span class="input-group-addon"><?php echo func_htmlspecialchars($this->t('Alt')); ?>:</span>
      <input type="text" name="<?php echo func_htmlspecialchars($this->getName()); ?>[alt]" value="<?php echo func_htmlspecialchars($this->getComplex('object.alt')); ?>" class="form-control input-alt" />
    </div>
  </li>
<?php }?>
