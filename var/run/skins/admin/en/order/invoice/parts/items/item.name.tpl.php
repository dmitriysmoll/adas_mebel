<td class="item">
  <?php if ($this->get('item')->getURL()): ?><a  href="<?php echo func_htmlspecialchars($this->get('item')->getURL()); ?>" class="item-name"><?php echo func_htmlspecialchars($this->get('item')->getName()); ?></a><?php endif; ?>
  <?php if (!($this->get('item')->getURL())): ?><span  class="item-name"><?php echo func_htmlspecialchars($this->get('item')->getName()); ?></span><?php endif; ?>
  <?php if (!($this->getComplex('item.product')->isPersistent())): ?><span  class="deleted-product-note">(<?php echo func_htmlspecialchars($this->t('deleted')); ?>)</span><?php endif; ?>

  <?php if ($this->isViewListVisible('invoice.item.name',array('item'=>$this->get('item')))): ?><ul  class="subitem additional simple-list">
  <?php $this->displayViewListContent('invoice.item.name', array('item' => $this->get('item'))); ?>
  </ul><?php endif; ?>
</td>
