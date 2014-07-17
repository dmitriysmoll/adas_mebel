<?php if ($this->isShowMarketPrice()): ?><li  data-theme="c" class="save-percent-container">
  <span class="save">
    <span id="save_percent"><?php echo func_htmlspecialchars($this->getYouSaveValue()); ?></span>%&nbsp;<?php echo func_htmlspecialchars($this->t('less')); ?>
  </span>
</li><?php endif; ?>
