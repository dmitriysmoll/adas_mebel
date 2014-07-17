<ul class="actions">
    <li class="button">
      <?php $this->getWidget(array('label' => $this->t('Install anyway'), 'action' => 'install_addon_force'), '\XLite\View\Button\Regular')->display(); ?>
    </li>
    <li class="or"><?php echo func_htmlspecialchars($this->t('or')); ?></li>
    <li class="button">
      <?php $this->getWidget(array('label' => $this->t('Update modules')), '\XLite\View\Button\Submit')->display(); ?>
    </li>
  </ul>
