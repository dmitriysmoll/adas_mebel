<p><?php echo func_htmlspecialchars($this->t('Mandatory fields are marked with an asterisk')); ?> (<span class="star">*</span>).</p><br />

<?php $this->getWidget(array('useBodyTemplate' => '1'), 'XLite\View\Model\Product')->display(); ?>
