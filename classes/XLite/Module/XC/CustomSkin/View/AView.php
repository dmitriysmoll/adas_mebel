<?php
 
namespace XLite\Module\XC\CustomSkin\View;
 
class AView extends \XLite\View\AView implements \XLite\Base\IDecorator
{
    public function getCSSFiles()
    {
        $list = parent::getCSSFiles();
 
        $list[] = 'modules/XC/CustomSkin/css/css.css';
 
        return $list;
    }   
}
?>