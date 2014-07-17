<?php if ($this->get('page')=='Performance'): ?><div  class="clean-widgets-cache">
  <?php $this->getWidget(array('style' => 'clean-widgets-cache', 'label' => 'Clean widgets cache', 'jsCode' => 'self.location=\''.$this->buildURL('css_js_performance','clean_view_cache').'\''), '\XLite\View\Button\Regular')->display(); ?>
  <?php $this->getWidget(array('id' => 'clean-widgets-cache-help-text', 'text' => $this->t('Clean widgets cache help text'), 'isImageTag' => 'true', 'className' => 'help-icon'), '\XLite\View\Tooltip')->display(); ?>
</div><?php endif; ?>
