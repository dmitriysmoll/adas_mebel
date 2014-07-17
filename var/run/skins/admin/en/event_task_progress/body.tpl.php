<div class="progress-bar <?php if ($this->isBlockingDriver()){?>blocking<?php }else{ ?>noblocking<?php }?>" data-event="<?php echo func_htmlspecialchars($this->getEvent()); ?>">

  <?php if ($this->getEventTitle()): ?><h3 ><?php echo func_htmlspecialchars($this->getEventTitle()); ?></h3><?php endif; ?>
  <div class="bar" data-percent="<?php echo func_htmlspecialchars($this->getPercent()); ?>" title="<?php echo func_htmlspecialchars($this->getPercent()); ?>%"></div>
  <?php if ($this->isBlockingDriver()){?>
    <?php if ($this->getBlockingNote()): ?><p  class="note"><?php echo func_htmlspecialchars($this->getBlockingNote()); ?></p><?php endif; ?>
  <?php }else{ ?>
    <?php if ($this->getNonBlockingNote()): ?><p  class="note"><?php echo func_htmlspecialchars($this->getNonBlockingNote()); ?></p><?php endif; ?>
  <?php }?>

</div>
