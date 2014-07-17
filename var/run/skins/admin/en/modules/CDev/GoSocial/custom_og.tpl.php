<div class="control">
  <?php $this->getWidget(array('fieldName' => $this->getNamePostedData('useCustomOG'), 'value' => $this->get('product')->getUseCustomOG(), 'fieldOnly' => 'true'), '\XLite\Module\CDev\GoSocial\View\FormField\Select\UseCustomOpenGraph')->display(); ?>
</div>
<div class="og-textarea">
  <?php $this->getWidget(array('fieldName' => $this->getNamePostedData('ogMeta'), 'cols' => '200', 'rows' => '8', 'value' => $this->get('product')->getOpenGraphMetaTags($this->get('false')), 'help' => $this->t('These Open Graph meta tags were generated automatically based on general product information.'), 'fieldOnly' => 'true'), '\XLite\View\FormField\Textarea\Simple')->display(); ?>
  <div class="clear"></div>
</div>
