<?php if ($this->getLanguages()): ?><ul class="languages-list" >
  <?php $lng = isset($this->lng) ? $this->lng : null; $_foreach_var = $this->getLanguages(); if (isset($_foreach_var)) { $this->lngArraySize=count($_foreach_var); $this->lngArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->id => $this->lng){ $this->lngArrayPointer++; ?><li >
    <?php if (!($this->getComplex('lng.code')==$this->getCode())): ?><a href="<?php echo func_htmlspecialchars($this->buildURL('labels','',array('code'=>$this->get('lng')->getCode()))); ?>" ><?php echo func_htmlspecialchars($this->get('lng')->getName()); ?></a><?php endif; ?>
    <?php if ($this->getComplex('lng.code')==$this->getCode()): ?><span ><?php echo func_htmlspecialchars($this->get('lng')->getName()); ?></span><?php endif; ?>
  </li>
<?php } $this->lng = $lng; ?>
</ul><?php endif; ?>
