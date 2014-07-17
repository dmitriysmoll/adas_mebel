<?php if ($this->isDisplayDetails($this->get('event'))): ?><li class="details" >
  <div class="action">
    <i data-interval="0" data-toggle="collapse" id="event-<?php echo func_htmlspecialchars($this->getComplex('event.eventId')); ?>-action" data-target="#event-<?php echo func_htmlspecialchars($this->getComplex('event.eventId')); ?>" class="fa fa-plus-square-o"></i>
  </div>
</li><?php endif; ?>
