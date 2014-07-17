<li class="local-server-input input-field">
  <?php $this->getWidget(array('fieldName' => 'local_server_file', 'fieldOnly' => 'true', 'value' => ''), '\XLite\View\FormField\Input\Text')->display(); ?>
  <?php $this->getWidget(array('label' => $this->t('Browse server')), '\XLite\View\Button\BrowseServer', 'local_server_file')->display(); ?>
</li>
