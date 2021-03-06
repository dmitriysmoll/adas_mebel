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

namespace XLite\Model;

/**
 * Money modificator
 * 
 * @Entity (repositoryClass="\XLite\Model\Repo\MoneyModificator")
 * @Table  (name="money_modificators")
 */
class MoneyModificator extends \XLite\Model\AEntity
{
    /**
     * ID 
     * 
     * @var integer
     *
     * @Id
     * @GeneratedValue (strategy="AUTO")
     * @Column         (type="uinteger")
     */
    protected $id;

    /**
     * Class name
     * 
     * @var string
     *
     * @Column (type="string")
     */
    protected $class;

    /**
     * Method-modificator 
     * 
     * @var string
     *
     * @Column (type="string", length=64)
     */
    protected $modificator = 'modifyMoney';

    /**
     * Method-validator 
     * 
     * @var string
     *
     * @Column (type="string", length=64)
     */
    protected $validator = '';

    /**
     * Position 
     * 
     * @var integer
     *
     * @Column (type="integer")
     */
    protected $position = 0;

    /**
     * Behavior limitation
     * 
     * @var string
     *
     * @Column (type="string", length=64)
     */
    protected $behavior = '';

    /**
     * Purpose limitation
     * 
     * @var string
     *
     * @Column (type="string", length=64)
     */
    protected $purpose = '';

    /**
     * Apply 
     * 
     * @param float                $value     Property value
     * @param \XLite\Model\AEntity $model     Model
     * @param string               $property  Model's property
     * @param array                $behaviors Behaviors
     * @param string               $purpose   Purpose
     *  
     * @return float
     */
    public function apply($value, \XLite\Model\AEntity $model, $property, array $behaviors, $purpose)
    {
        $class = $this->getClass();

        if (\XLite\Core\Operator::isClassExists($class)) {

            $validationMethod = $this->getValidator();
            $calculateMethod = $this->getModificator();

            if (!$validationMethod || $class::$validationMethod($model, $property, $behaviors, $purpose)) {
                $value = $class::$calculateMethod($value, $model, $property, $behaviors, $purpose);
            }
        }

        return $value;
    }

    /**
     * Get id
     *
     * @return uinteger 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set class
     *
     * @param string $class
     * @return MoneyModificator
     */
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Get class
     *
     * @return string 
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set modificator
     *
     * @param string $modificator
     * @return MoneyModificator
     */
    public function setModificator($modificator)
    {
        $this->modificator = $modificator;
        return $this;
    }

    /**
     * Get modificator
     *
     * @return string 
     */
    public function getModificator()
    {
        return $this->modificator;
    }

    /**
     * Set validator
     *
     * @param string $validator
     * @return MoneyModificator
     */
    public function setValidator($validator)
    {
        $this->validator = $validator;
        return $this;
    }

    /**
     * Get validator
     *
     * @return string 
     */
    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return MoneyModificator
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set behavior
     *
     * @param string $behavior
     * @return MoneyModificator
     */
    public function setBehavior($behavior)
    {
        $this->behavior = $behavior;
        return $this;
    }

    /**
     * Get behavior
     *
     * @return string 
     */
    public function getBehavior()
    {
        return $this->behavior;
    }

    /**
     * Set purpose
     *
     * @param string $purpose
     * @return MoneyModificator
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Get purpose
     *
     * @return string 
     */
    public function getPurpose()
    {
        return $this->purpose;
    }
}