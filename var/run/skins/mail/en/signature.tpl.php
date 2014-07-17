--<br />
<div><?php echo func_htmlspecialchars($this->t('Thank you for using company services',array('company'=>$this->getComplex('config.Company.company_name')))); ?></div>

<br />

<?php if ($this->getComplex('config.Company.company_phone')): ?><div ><?php echo func_htmlspecialchars($this->t('Phone')); ?>: <?php echo func_htmlspecialchars($this->getComplex('config.Company.company_phone')); ?></div><?php endif; ?>

<?php if ($this->getComplex('config.Company.company_fax')): ?><div ><?php echo func_htmlspecialchars($this->t('Fax')); ?>: <?php echo func_htmlspecialchars($this->getComplex('config.Company.company_fax')); ?></div><?php endif; ?>

<?php if ($this->getComplex('config.Company.company_website')): ?><div ><?php echo func_htmlspecialchars($this->t('Website')); ?>: <?php echo func_htmlspecialchars($this->getComplex('config.Company.company_website')); ?></div><?php endif; ?>
