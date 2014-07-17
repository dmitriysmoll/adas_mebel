<?php if ($this->get('product')->getImages()&&!($this->get('product')->countImages()==1)): ?><a  class="arrow right-arrow" href="javascript:void(0);"><img src="skins/default/en/images/spacer.gif" alt="Next image" /></a><?php endif; ?>
<?php if (!($this->get('product')->getImages()||$this->get('product')->countImages()==1)): ?><span  class="arrow right-arrow"></span><?php endif; ?>
