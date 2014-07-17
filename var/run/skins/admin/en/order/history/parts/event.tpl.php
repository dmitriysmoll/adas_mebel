<?php $event = isset($this->event) ? $this->event : null; $_foreach_var = $this->get('block'); if (isset($_foreach_var)) { $this->eventArraySize=count($_foreach_var); $this->eventArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->index => $this->event){ $this->eventArrayPointer++; ?><li class="event" >
  <?php $this->displayViewListContent('order.history.base.events.details.info', array('event' => $this->get('event'))); ?>
</li>
<?php } $this->event = $event; ?>
