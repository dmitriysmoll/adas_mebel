<?php if ($this->get('order')->getNotes()): ?><div  class="customer-note">
  <h3><?php echo func_htmlspecialchars($this->t('Customer note')); ?>:</h3>
  <div><?php echo func_htmlspecialchars($this->get('order')->getNotes()); ?></div>
</div><?php endif; ?>
