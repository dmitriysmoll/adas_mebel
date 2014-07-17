<?php if ($this->isModuleToDisable($this->get('entry'))): ?><td  class="module-status status-incompatible"></td><?php endif; ?>
<?php if (!($this->isModuleToDisable($this->get('entry')))): ?><td  class="module-status"></td><?php endif; ?>
