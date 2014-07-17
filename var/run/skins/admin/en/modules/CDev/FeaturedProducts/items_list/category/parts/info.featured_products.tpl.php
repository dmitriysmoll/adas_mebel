<i class="fa fa-star"></i>
<a href="<?php echo func_htmlspecialchars($this->buildURL('featured_products','',array('id'=>$this->get('entity')->getCategoryId()))); ?>" class="count-link"><?php echo func_htmlspecialchars($this->get('entity')->getFeaturedProductsCount()); ?></a>
