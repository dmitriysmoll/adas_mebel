<?php if ($this->getNestedViewList('actions',array('module'=>$this->get('module')))): ?><ul  class="actions clearfix">
  <?php $action = isset($this->action) ? $this->action : null; $_foreach_var = $this->getNestedViewList('actions',array('module'=>$this->get('module'),'canEnable'=>$this->canEnable($this->get('module')))); if (isset($_foreach_var)) { $this->actionArraySize=count($_foreach_var); $this->actionArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->i => $this->action){ $this->actionArrayPointer++; ?><li  class="<?php echo func_htmlspecialchars($this->get('action')->getName()); ?> <?php echo func_htmlspecialchars($this->buildListItemClass('action')); ?>"><?php echo func_htmlspecialchars($this->get('action')->display()); ?></li>
<?php } $this->action = $action; ?>
</ul><?php endif; ?>
