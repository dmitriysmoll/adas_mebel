<p class="title">
  <?php echo func_htmlspecialchars($this->t('Placed on')); ?> <span class="date"><?php echo func_htmlspecialchars($this->getOrderDate()); ?></span> <?php echo func_htmlspecialchars($this->t('by')); ?>
  <?php if ($this->hasProfilePage()): ?><a  class="name" href="<?php echo func_htmlspecialchars($this->getProfileURL()); ?>"><?php echo func_htmlspecialchars($this->getProfileName()); ?></a><?php endif; ?>
  <?php if (!($this->hasProfilePage())): ?><span  class="name"><?php echo func_htmlspecialchars($this->getProfileName()); ?></span><?php endif; ?>
  <?php if ($this->getMembership()): ?><span  class="membership">(<?php echo func_htmlspecialchars($this->get('membership')->getName()); ?>)</span><?php endif; ?>
</p>
