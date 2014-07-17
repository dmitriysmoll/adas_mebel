<?php $block = isset($this->block) ? $this->block : null; $_foreach_var = $this->getOrderHistoryEventsBlock(); if (isset($_foreach_var)) { $this->blockArraySize=count($_foreach_var); $this->blockArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->index => $this->block){ $this->blockArrayPointer++; ?><li class="block" >
  <ul class="block-item">
    <?php $this->displayViewListContent('order.history.base.events', array('index' => $this->get('index'), 'block' => $this->get('block'))); ?>
  </ul>
</li>
<?php } $this->block = $block; ?>
