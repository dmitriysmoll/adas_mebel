<li class="files-option">
  <?php $this->getWidget(array('fieldName' => 'options[files]', 'label' => $this->t('Export public files as'), 'value' => $this->getComplex('config.Export.files'), 'help' => $this->t('Choosing "URLs" will link the exported data to your public files (product and category images, downloadable files shown on product pages, and so on) through direct URLs')), 'XLite\View\FormField\Select\ExportFiles')->display(); ?>
</li>
