<?php if ($this->isModule($this->get('entry'))): ?><li class="module" >
  <ul class="details">
  <?php $this->displayInheritedViewListContent('sections.form.info.module', array('entry' => $this->get('entry'))); ?>
  </ul>
</li><?php endif; ?>
