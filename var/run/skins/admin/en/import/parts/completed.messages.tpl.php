<?php if ($this->getMessages()): ?><ul class="messages" >
  <?php $message = isset($this->message) ? $this->message : null; $_foreach_var = $this->getMessages(); if (isset($_foreach_var)) { $this->messageArraySize=count($_foreach_var); $this->messageArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->message){ $this->messageArrayPointer++; ?><li >
    <i class="icon-ok"></i> <?php echo func_htmlspecialchars($this->getComplex('message.text')); ?> <?php if ($this->getComplex('message.comment')): ?><span ><?php echo func_htmlspecialchars($this->getComplex('message.comment')); ?></span><?php endif; ?>
  </li>
<?php } $this->message = $message; ?>
</ul><?php endif; ?>
<?php if (!($this->getMessages()&&$this->getErrorMessages())): ?><div class="empty" >
  <?php $message = isset($this->message) ? $this->message : null; $_foreach_var = $this->getErrorMessages(); if (isset($_foreach_var)) { $this->messageArraySize=count($_foreach_var); $this->messageArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->message){ $this->messageArrayPointer++; ?><div class="message" >
    <i class="icon-ok"></i> <?php echo $this->getComplex('message.text'); ?> <?php if ($this->getComplex('message.comment')): ?><div  class="comment"><?php echo $this->getComplex('message.comment'); ?></div><?php endif; ?>
  </div>
<?php } $this->message = $message; ?>
</div><?php endif; ?>
