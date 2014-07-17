<td class="error-messages" colspan="3">
  <div class="error-message-block">
    <?php $message = isset($this->message) ? $this->message : null; $_foreach_var = $this->get('messages'); if (isset($_foreach_var)) { $this->messageArraySize=count($_foreach_var); $this->messageArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->message){ $this->messageArrayPointer++; ?><div class="error-message" >
      <?php echo func_htmlspecialchars($this->get('message')); ?>
    </div>
<?php } $this->message = $message; ?>
  </div>
</td>
