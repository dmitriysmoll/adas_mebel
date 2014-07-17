<div class="step-items">
  <ul>
    <?php $role = isset($this->role) ? $this->role : null; $_foreach_var = $this->getRoles(); if (isset($_foreach_var)) { $this->roleArraySize=count($_foreach_var); $this->roleArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->role){ $this->roleArrayPointer++; ?><li  class="item-role"><?php echo func_htmlspecialchars($this->getComplex('role.name')); ?></li>
<?php } $this->role = $role; ?>
  </ul>
</div>
