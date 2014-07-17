<?php if ($this->getDetails($this->get('event'))): ?><div id="event-<?php echo func_htmlspecialchars($this->getComplex('event.eventId')); ?>" class="order-event-details" >
  <div class="details">
    <ul>
      <?php $columnData = isset($this->columnData) ? $this->columnData : null; $_foreach_var = $this->getDetails($this->get('event')); if (isset($_foreach_var)) { $this->columnDataArraySize=count($_foreach_var); $this->columnDataArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->columnId => $this->columnData){ $this->columnDataArrayPointer++; ?><li  class="order-history-object-detail-column">
        <ul>
          <?php $cell = isset($this->cell) ? $this->cell : null; $_foreach_var = $this->get('columnData'); if (isset($_foreach_var)) { $this->cellArraySize=count($_foreach_var); $this->cellArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->cell_id => $this->cell){ $this->cellArrayPointer++; ?><li >
            <span class="event-details-label"><?php echo func_htmlspecialchars($this->get('cell')->getName()); ?>:</span> <span class="value"><?php echo func_htmlspecialchars($this->get('cell')->getValue()); ?></span>
          </li>
<?php } $this->cell = $cell; ?>
        </ul>
      </li>
<?php } $this->columnData = $columnData; ?>
    </ul>
  </div>
</div><?php endif; ?>
