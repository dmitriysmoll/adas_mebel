<div class="incompatible-module-list-description">
  <?php echo func_htmlspecialchars($this->t('These modules may be incompatible with the upcoming upgrade. No guarantee that the store will operate correctly if the modules remain enabled. Please consider disabling the modules before proceeding to the next step')); ?>.
</div>
<?php if ($this->hasDisabledEntries()): ?><div  class="incompatible-module-list-description">
  <?php echo func_htmlspecialchars($this->t('Please note that some of these modules are definitely incompatible with the upcoming upgrade and will be disabled in order to prevent the system crash')); ?>.
</div><?php endif; ?>
