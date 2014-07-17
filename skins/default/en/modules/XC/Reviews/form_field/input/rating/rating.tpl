{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Rating bar for product
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2014 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 *}

<div class="vote-bar">
  <ul>
    {foreach:getStars(),level,star}
      <li class="star-{level}">
        <span class="{getClass()}">
          <span{if:star.full} class="full"{end:}>
            <img IF="star.percent" src="images/spacer.gif" alt="" style="width: {star.percent}%;" />
          </span>
        </span>
      </li>
    {end:}
  </ul>

  <input type="hidden" name="rating" value="{entity.rating}" />
</div>
