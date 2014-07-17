<a class="item-attribute-values underline-emulation" href="<?php echo func_htmlspecialchars($this->buildURL('cart')); ?>" id="item-attribute<?php echo func_htmlspecialchars($this->get('item')->getItemId()); ?>" rel="div.item-attribute-values.item-<?php echo func_htmlspecialchars($this->get('item')->getItemId()); ?>"><span><?php echo func_htmlspecialchars($this->t('attributes')); ?></span></a>
<br />
<div class="internal-popup item-attribute-values item-<?php echo func_htmlspecialchars($this->get('item')->getItemId()); ?>" style="display: none;">
  <ul class="item-attribute-values">
    <?php $av = isset($this->av) ? $this->av : null; $_foreach_var = $this->get('item')->getSortedAttributeValues(); if (isset($_foreach_var)) { $this->avArraySize=count($_foreach_var); $this->avArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->av){ $this->avArrayPointer++; ?><li ><?php echo func_htmlspecialchars($this->get('av')->getActualName()); ?>: <?php echo func_htmlspecialchars($this->get('av')->getActualValue()); ?></li>
<?php } $this->av = $av; ?>
  </ul>
</div>
