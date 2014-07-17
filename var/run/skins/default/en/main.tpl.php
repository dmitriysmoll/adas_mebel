<?php if ($this->isDeveloperMode()): ?><div  id="profiler-messages"></div><?php endif; ?>

<div id="page-wrapper" class="overlay-blur-base">
  <div id="page" class="<?php if ($this->isForceChangePassword()){?>force-change-password-page<?php }?>">
    <?php $this->displayViewListContent('layout.main'); ?>
  </div>
  <?php $this->displayViewListContent('layout.footer'); ?>
</div>
