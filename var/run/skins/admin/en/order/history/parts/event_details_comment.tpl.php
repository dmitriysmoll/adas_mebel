<?php if ($this->getComment($this->get('event'))): ?><div id="event-<?php echo func_htmlspecialchars($this->getComplex('event.eventId')); ?>" class="order-event-details" >
  <div class="details"><?php echo $this->getComment($this->get('event')); ?></div>
</div><?php endif; ?>
