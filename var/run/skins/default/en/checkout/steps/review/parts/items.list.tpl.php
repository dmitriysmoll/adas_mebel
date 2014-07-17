<div class="list" style="display: none;">

  <ul>
    <?php $item = isset($this->item) ? $this->item : null; $_foreach_var = $this->get('cart')->getItems(); if (isset($_foreach_var)) { $this->itemArraySize=count($_foreach_var); $this->itemArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->item){ $this->itemArrayPointer++; ?><li >
      <a href="<?php echo func_htmlspecialchars($this->get('item')->getURL()); ?>"><?php echo func_htmlspecialchars($this->get('item')->getName()); ?><img src="skins/default/en/images/spacer.gif" alt="" class="fade" /></a>
      <div>
        &times;
        <span class="qty"><?php echo func_htmlspecialchars($this->get('item')->getAmount()); ?></span>
      </div>
    </li>
<?php } $this->item = $item; ?>
  </ul>

  <hr />
  <a href="<?php echo func_htmlspecialchars($this->buildURL('cart')); ?>" class="cart"><?php echo func_htmlspecialchars($this->t('View cart')); ?></a>
</div>
