<html>
<body>
<b><?php echo func_htmlspecialchars($this->t('Name')); ?>:</b> <?php echo func_htmlspecialchars($this->getComplex('data.name')); ?><br />
<b><?php echo func_htmlspecialchars($this->t('E-mail')); ?>:</b> <?php echo func_htmlspecialchars($this->getComplex('data.email')); ?><br />
<b><?php echo func_htmlspecialchars($this->t('Subject')); ?>:</b> <?php echo func_htmlspecialchars($this->getComplex('data.subject')); ?><br />
<p>
<?php echo $this->flexyModifierCall('nl2br', $this->getComplex('data.message')); ?>
</body>
</html>
