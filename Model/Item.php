<?php
/**
 * Copyright © 2018 gladd. All rights reserved.
 */

namespace Gladd\Demo\Model;

use Magento\Framework\Model\AbstractModel;
class Item extends AbstractModel
{
    const ENTITY = 'gladd_item';

    /**
     * Initialize resources
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Gladd\Demo\Model\ResourceModel\Item::class);
    }
}