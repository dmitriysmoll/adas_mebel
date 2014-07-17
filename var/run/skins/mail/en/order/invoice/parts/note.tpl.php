<?php if ($this->get('order')->getNotes()): ?><div  class="customer-note">
  <strong><?php echo func_htmlspecialchars($this->t('Customer note')); ?>:</strong>
  <div><?php echo func_htmlspecialchars($this->get('order')->getNotes()); ?></div>
</div><?php endif; ?>
