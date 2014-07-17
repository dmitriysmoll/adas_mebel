<p style="font-weight: bold;"><?php echo func_htmlspecialchars($this->t('Tracking numbers')); ?>:</p>

<?php $_foreach_var = $this->get('trackingNumbers'); if (isset($_foreach_var)) { $this->numberArraySize=count($_foreach_var); $this->numberArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->number){ $this->numberArrayPointer++; ?>
<div>
<?php if ($this->get('order')->getTrackingInformationURL($this->getComplex('number.value'))){?>
<?php if ($this->get('order')->isTrackingInformationForm($this->getComplex('number.value'))){?>
<form method="<?php echo $this->get('order')->getTrackingInformationMethod($this->getComplex('number.value')); ?>" action="<?php echo func_htmlspecialchars($this->get('order')->getTrackingInformationURL($this->getComplex('number.value'))); ?>" target="_blank" >
<?php $_foreach_var = $this->get('order')->getTrackingInformationParams($this->getComplex('number.value')); if (isset($_foreach_var)) { $this->valueArraySize=count($_foreach_var); $this->valueArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->name => $this->value){ $this->valueArrayPointer++; ?>
<input type="hidden" name="<?php echo func_htmlspecialchars($this->get('name')); ?>" value="<?php echo func_htmlspecialchars($this->get('value')); ?>" />
<?php }?>
<span><?php echo func_htmlspecialchars($this->getComplex('number.value')); ?> - </span>
<button type="submit"><?php echo func_htmlspecialchars($this->t('Track package')); ?></button>
</form>
<?php }else{ ?>
<span><?php echo func_htmlspecialchars($this->getComplex('number.value')); ?> - </span>
<a href="<?php echo func_htmlspecialchars($this->get('order')->getTrackingInformationURL($this->getComplex('number.value'))); ?>" target="_blank"><?php echo func_htmlspecialchars($this->t('Track package')); ?></a>
<?php }?>
<?php }else{ ?>
<?php echo func_htmlspecialchars($this->getComplex('number.value')); ?>
<?php }?>
</div>
<?php }?>
