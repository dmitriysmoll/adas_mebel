<div class="remove-wrapper <?php echo func_htmlspecialchars($this->get('getStyle')); ?>">
  <button type="button" class="<?php echo func_htmlspecialchars($this->getStyle()); ?>" title="<?php echo func_htmlspecialchars($this->t($this->getButtonLabel())); ?>" tabindex="-1"><i class="fa fa-trash-o"></i></button>
  <input type="checkbox" name="<?php echo func_htmlspecialchars($this->getName()); ?>" value="1" tabindex="-1" />
</div>
