<?php $this->display('items_list/model/table/order/cell.total-clean.tpl'); ?>
<span class="quantity"><?php echo func_htmlspecialchars($this->t('Qty')); ?>: <?php echo func_htmlspecialchars($this->getItemsQuantity($this->get('entity'))); ?></span>
