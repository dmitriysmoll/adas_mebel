<div class="download-box <?php if ($this->isCompletedSection()){?> completed-download<?php }else{ ?>begin-download<?php }?>">
  <div class="subcontent clearfix">
    <?php $this->displayViewListContent('export.completed.content'); ?>
  </div>
  <?php if ($this->isCompletedSection()): ?><div class="buttons" >
    <?php $this->displayViewListContent('export.completed.buttons'); ?>
  </div><?php endif; ?>
</div>
