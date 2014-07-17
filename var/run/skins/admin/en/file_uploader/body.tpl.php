<div class="<?php echo func_htmlspecialchars($this->getDivStyle()); ?>" data-object-id="<?php echo func_htmlspecialchars($this->getObjectId()); ?>">
  <input type="checkbox" name="<?php echo func_htmlspecialchars($this->getName()); ?>[delete]" value="1" class="input-delete" />
  <?php if ($this->isMultiple()): ?><input  type="hidden" name="<?php echo func_htmlspecialchars($this->getName()); ?>[position]" value="<?php echo func_htmlspecialchars($this->getPosition()); ?>" class="input-position" /><?php endif; ?>
  <?php if ($this->isTemporary()): ?><input  type="hidden" name="<?php echo func_htmlspecialchars($this->getName()); ?>[temp_id]" value="<?php echo func_htmlspecialchars($this->getComplex('object.id')); ?>" class="input-temp-id" /><?php endif; ?>
  <a href="<?php echo func_htmlspecialchars($this->getLink()); ?>" class="link" data-toggle="dropdown">
    <?php echo $this->getPreview(); ?>
    <div class="icon">
      <i class="<?php echo func_htmlspecialchars($this->getIconStyle()); ?>"></i>
    </div>
  </a>
  <ul class="dropdown-menu" role="menu">
    <?php $this->displayViewListContent('file-uploader.menu'); ?>
  </ul>
</div>
