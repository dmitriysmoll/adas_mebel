<?php if ($this->get('product')->getImages()&&!($this->get('product')->countImages()==1)): ?><a  class="arrow left-arrow" href="javascript:void(0);"><img src="skins/default/en/images/spacer.gif" alt="Previous image" /></a><?php endif; ?>
<?php if (!($this->get('product')->getImages()||$this->get('product')->countImages()==1)): ?><span  class="arrow left-arrow"></span><?php endif; ?>
