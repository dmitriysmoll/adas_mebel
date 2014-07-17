<?php if ($this->get('currency')->getPrefix()): ?><span class="symbol" ><?php echo $this->get('currency')->getPrefix(); ?></span><?php endif; ?>
<span class="value"><?php echo $this->getViewValue($this->get('singleField')); ?></span>
<?php if ($this->get('currency')->getSuffix()): ?><span class="symbol" ><?php echo $this->get('currency')->getSuffix(); ?></span><?php endif; ?>
