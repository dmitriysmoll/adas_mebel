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

namespace XLite\Module\CDev\SimpleCMS\Model;

/**
 * Menu
 *
 * @Entity
 * @Table  (name="menus",
 *      indexes={
 *          @Index (name="enabled", columns={"enabled", "type"}),
 *          @Index (name="position", columns={"position"})
 *      }
 * )
 */
class Menu extends \XLite\Model\Base\I18n
{
    /**
     * Menu types
     */
    const MENU_TYPE_PRIMARY = 'P';
    const MENU_TYPE_FOOTER  = 'F';

    /**
     * Unique ID
     *
     * @var   integer
     *
     * @Id
     * @GeneratedValue (strategy="AUTO")
     * @Column         (type="uinteger")
     */
    protected $id;

    /**
     * Link
     *
     * @var   string
     *
     * @Column (type="string")
     */
    protected $link;

    /**
     * Type
     *
     * @var   string
     *
     * @Column (type="string", length=1)
     */
    protected $type;

    /**
     * Position
     *
     * @var   integer
     *
     * @Column (type="integer")
     */
    protected $position = 0;

    /**
     * Is menu enabled or not
     *
     * @var   boolean
     *
     * @Column (type="boolean")
     */
    protected $enabled = true;

    /**
     * Visible for anonymous only (A), logged in only (L), for all visitors (AL)
     *
     * @var   string
     *
     * @Column (type="string", length=2)
     */
    protected $visibleFor = 'AL';


    /**
     * Get menu types
     *
     * @return array
     */
    public static function getTypes()
    {
        return array(
            static::MENU_TYPE_PRIMARY => 'Primary menu',
            static::MENU_TYPE_FOOTER  => 'Footer menu',
        );
    }

    /**
     * Set type
     *
     * @param string $type Type
     *
     * @return void
     */
    public function setType($type)
    {
        $types = static::getTypes();

        if (isset($types[$type])) {
            $this->type = $type;
        }
    }
}
