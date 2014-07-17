<?php if ($this->get('page')=='Performance'): ?><div  class="clean-aggregation-cache">
  <?php $this->getWidget(array('style' => 'clean-aggregation-cache', 'label' => 'Clean aggregation cache', 'jsCode' => 'self.location=\''.$this->buildURL('css_js_performance','clean_aggregation_cache').'\''), '\XLite\View\Button\Regular')->display(); ?>
  <?php $this->getWidget(array('id' => 'clean-aggregation-help-text', 'text' => $this->t('Clean aggregation cache help text'), 'isImageTag' => 'true', 'className' => 'help-icon'), '\XLite\View\Tooltip')->display(); ?>
</div><?php endif; ?>
