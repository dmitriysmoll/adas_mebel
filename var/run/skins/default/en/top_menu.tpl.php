<div class="navbar navbar-inverse mobile-hidden" role="navigation">
    <div class="collapse navbar-collapse">
        <ul id="top-main-menu" class="nav navbar-nav">
            <?php $_foreach_var = $this->getItems(); if (isset($_foreach_var)) { $this->itemArraySize=count($_foreach_var); $this->itemArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->i => $this->item){ $this->itemArrayPointer++; ?>
                <li <?php echo $this->displayItemClass($this->get('i')); ?>><a href="<?php echo func_htmlspecialchars($this->getComplex('item.url')); ?>" <?php if ($this->getComplex('item.active')){?>class="active"<?php }?>><?php echo func_htmlspecialchars($this->getComplex('item.label')); ?></a></li>
            <?php }?>
        </ul>
    </div>
</div>


<ul class="desctop-hidden">
    <?php $_foreach_var = $this->getItems(); if (isset($_foreach_var)) { $this->itemArraySize=count($_foreach_var); $this->itemArrayPointer=0; } if (isset($_foreach_var)) foreach ($_foreach_var as $this->i => $this->item){ $this->itemArrayPointer++; ?>
        <li <?php echo $this->displayItemClass($this->get('i')); ?>><a href="<?php echo func_htmlspecialchars($this->getComplex('item.url')); ?>" <?php if ($this->getComplex('item.active')){?>class="active"<?php }?>><?php echo func_htmlspecialchars($this->getComplex('item.label')); ?></a></li>
    <?php }?>
</ul>
