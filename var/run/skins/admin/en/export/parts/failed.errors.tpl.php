<div class="errors">
  <ul>
    <?php $error = isset($this->error) ? $this->error : null; $_foreach_var = $this->getErrors(); if (isset($_foreach_var)) { $this->errorArraySize=count($_foreach_var); $this->errorArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->error){ $this->errorArrayPointer++; ?><li >
      <h3><?php echo func_htmlspecialchars($this->getComplex('error.title')); ?></h3>
      <p><?php echo func_htmlspecialchars($this->getComplex('error.body')); ?></p>
    </li>
<?php } $this->error = $error; ?>
  </ul>
</div>
