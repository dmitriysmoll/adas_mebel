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

namespace XLite\Core\Validator;

/**
 * Hash array validator
 */
class HashArray extends \XLite\Core\Validator\AValidator
{
    /**
     * Pairs
     *
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $pairs;

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->pairs = new \Doctrine\Common\Collections\ArrayCollection;
    }

    /**
     * Add pair validator
     *
     * @param mixed                            $name       Cell name or pair validator
     * @param \XLite\Core\Validator\AValidator $validator  Cell validator OPTIONAL
     * @param string                           $mode       Pair validation mode OPTIONAL
     * @param string                           $publicName Cell public name OPTIONAL
     *
     * @return \XLite\Core\Validator\AValidator
     */
    public function addPair(
        $name,
        \XLite\Core\Validator\AValidator $validator = null,
        $mode = \XLite\Core\Validator\Pair\APair::STRICT,
        $publicName = null
    ) {
        $result = null;

        if (is_object($name) && $name instanceof \XLite\Core\Validator\Pair\APair) {
            $result = $name;

        } elseif ($name && $validator) {
            $result = new \XLite\Core\Validator\Pair\Simple($mode);
            $result->setName($name);
            $result->setValidator($validator);

            if ($publicName) {
                $result->setPublicName($publicName);
            }
        }

        if ($result) {
            $this->pairs[] = $result;

            if (method_exists($result, 'getValidator')) {
                $result = $result->getValidator();
            }
        }

        return $result;
    }

    /**
     * Get pair validators
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getPairs()
    {
        return $this->pairs;
    }

    /**
     * Get child cell validator
     *
     * @param mixed $name Name
     *
     * @return \XLite\Core\Validator\AValidator
     */
    public function getChild($name)
    {
        $result = null;

        foreach ($this->getPairs() as $pair) {
            if ($pair->getName() == $name) {
                $result = $pair->getValidator();
                break;
            }
        }

        return $result;
    }

    /**
     * Validate
     *
     * @param mixed $data Data
     *
     * @return void
     * @throws \XLite\Core\Validator\Exception
     */
    public function validate($data)
    {
        if (!is_array($data)) {
            throw $this->throwError('Not an array');
        }

        foreach ($this->getPairs() as $pair) {
            $pair->validate($data);
        }
    }

    /**
     * Sanitaize
     *
     * @param mixed $data Daa
     *
     * @return mixed
     */
    public function sanitize($data)
    {
        $sanitizedData = array();

        foreach ($this->getPairs() as $pair) {
            $sanitizedData += $pair->sanitize($data);
        }

        return $sanitizedData;
    }
}
