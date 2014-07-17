<?php $action = isset($this->action) ? $this->action : null; $_foreach_var = $this->getOrderActions($this->get('entity')); if (isset($_foreach_var)) { $this->actionArraySize=count($_foreach_var); $this->actionArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->action){ $this->actionArrayPointer++; ?><div >
  <?php echo $this->get('action')->display(); ?>
</div>
<?php } $this->action = $action; ?>
