<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * X-Cart
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the software license agreement
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.x-cart.com/license-agreement.html
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to licensing@x-cart.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not modify this file if you wish to upgrade X-Cart to newer versions
 * in the future. If you wish to customize X-Cart for your needs please
 * refer to http://www.x-cart.com/ for more information.
 *
 * @category  X-Cart 5
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

namespace XLite\View\Model;

/**
 * Attribute option view model
 */
class AttributeOption extends \XLite\View\Model\AModel
{
    /**
     * Shema default
     *
     * @var array
     */
    protected $schemaDefault = array(
        'default' => array(
            self::SCHEMA_CLASS    => 'XLite\View\FormField\Input\Checkbox\Enabled',
            self::SCHEMA_LABEL    => 'Default',
            self::SCHEMA_REQUIRED => false,
        ),
        'name' => array(
            self::SCHEMA_CLASS    => 'XLite\View\FormField\Input\Text',
            self::SCHEMA_LABEL    => 'Name',
            self::SCHEMA_REQUIRED => false,
        ),
    );

    /**
     * Return current model ID
     *
     * @return integer
     */
    public function getModelId()
    {
        return \XLite\Core\Request::getInstance()->id;
    }

    /**
     * This object will be used if another one is not pased
     *
     * @return \XLite\Model\AttributeOption
     */
    protected function getDefaultModelObject()
    {
        $model = $this->getModelId()
            ? \XLite\Core\Database::getRepo('XLite\Model\AttributeOption')->find($this->getModelId())
            : null;

        return $model ?: new \XLite\Model\AttributeOption;
    }

    /**
     * Return name of web form widget class
     *
     * @return string
     */
    protected function getFormClass()
    {
        return '\XLite\View\Form\Model\AttributeOption';
    }

    /**
     * Return list of the "Button" widgets
     *
     * @return array
     */
    protected function getFormButtons()
    {
        $result = parent::getFormButtons();

        $label = $this->getModelObject()->getId() ? 'Update' : 'Create';

        $result['submit'] = new \XLite\View\Button\Submit(
            array(
                \XLite\View\Button\AButton::PARAM_LABEL => $label,
                \XLite\View\Button\AButton::PARAM_STYLE => 'action',
            )
        );

        return $result;
    }

    /**
     * Add top message
     *
     * @return void
     */
    protected function addDataSavedTopMessage()
    {
        if ('create' != $this->currentAction) {
            \XLite\Core\TopMessage::addInfo('The attribute option has been updated');

        } else {
            \XLite\Core\TopMessage::addInfo('The attribute option has been added');
        }
    }

}