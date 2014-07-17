<input
  type="text"
  value="<?php echo func_htmlspecialchars($this->getBoxValue()); ?>"
  class="<?php echo func_htmlspecialchars($this->getClass()); ?>"
  id="<?php echo func_htmlspecialchars($this->getBoxId()); ?>"
  name="<?php echo func_htmlspecialchars($this->getBoxName()); ?>"
  title="<?php echo func_htmlspecialchars($this->t($this->getBoxTitle())); ?>" />
<span class="wheel-mark">&nbsp;</span>
