<div class="tags-list-box">
  <span class="icon icon-tags"></span>
  <label for="edit-field-tags-tid"><?php echo func_htmlspecialchars($this->t('Tags')); ?></label>

  <div class="tag-list">
    <?php $url = isset($this->url) ? $this->url : null; $_foreach_var = $this->getTagsData(); if (isset($_foreach_var)) { $this->urlArraySize=count($_foreach_var); $this->urlArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->name => $this->url){ $this->urlArrayPointer++; ?><div  class="tag-item"><a href="<?php echo func_htmlspecialchars($this->get('url')); ?>"><?php echo func_htmlspecialchars($this->getTagName($this->get('name'))); ?></a></div>
<?php } $this->url = $url; ?>
  </div>
</div>
