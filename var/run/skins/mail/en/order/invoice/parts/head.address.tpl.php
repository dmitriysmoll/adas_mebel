<td style="width: 99%;white-space: nowrap;">
  <strong><?php echo func_htmlspecialchars($this->getComplex('config.Company.company_name')); ?></strong>
  <p>
    <?php if ($this->getComplex('config.Company.location_address')){?><?php echo func_htmlspecialchars($this->getComplex('config.Company.location_address')); ?><br /><?php }?>
    <?php if ($this->getComplex('config.Company.location_city')){?><?php echo func_htmlspecialchars($this->getComplex('config.Company.location_city')); ?>, <?php }?><?php if ($this->getComplex('config.Company.locationState.state')){?><?php echo func_htmlspecialchars($this->getComplex('config.Company.locationState.state')); ?>, <?php }?><?php if ($this->getComplex('config.Company.location_zipcode')){?><?php echo func_htmlspecialchars($this->getComplex('config.Company.location_zipcode')); ?><?php }?><br />
    <?php if ($this->getComplex('config.Company.locationCountry')){?><?php echo func_htmlspecialchars($this->getComplex('config.Company.locationCountry')->getCountry()); ?><?php }?>
  </p>
  <?php if ($this->getComplex('config.Company.company_phone')||$this->getComplex('config.Company.company_fax')): ?><p >
    <?php if ($this->getComplex('config.Company.company_phone')){?><?php echo func_htmlspecialchars($this->t('Phone')); ?>: <?php echo func_htmlspecialchars($this->getComplex('config.Company.company_phone')); ?><br /><?php }?>
    <?php if ($this->getComplex('config.Company.company_fax')){?><?php echo func_htmlspecialchars($this->t('Fax')); ?>: <?php echo func_htmlspecialchars($this->getComplex('config.Company.company_fax')); ?><?php }?>
  </p><?php endif; ?>
  <?php if ($this->getComplex('config.Company.company_website')): ?><p  class="url">
    <a href="<?php echo func_htmlspecialchars($this->getComplex('config.Company.company_website')); ?>"><?php echo func_htmlspecialchars($this->getComplex('config.Company.company_website')); ?></a>
  </p><?php endif; ?>
</td>
