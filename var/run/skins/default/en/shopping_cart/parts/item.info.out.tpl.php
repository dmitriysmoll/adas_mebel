<?php if (!($this->get('item')->isValidAmount())): ?><p class="item-out-of-stock" ><?php echo func_htmlspecialchars($this->t('Out of stock')); ?></p><?php endif; ?>
