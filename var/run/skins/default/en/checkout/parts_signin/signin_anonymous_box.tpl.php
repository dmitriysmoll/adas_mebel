<?php $this->getWidget(array('location' => $this->buildURL('checkout','update_profile',array('email'=>'','same_address'=>'1')), 'label' => $this->t('Continue')), '\XLite\View\Button\Link')->display(); ?>