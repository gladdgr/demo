<?php
/**
 * Copyright © 2017 gladd. All rights reserved.
 */

namespace Gladd\Demo\Model\ResourceMode\Item;

use Magento\Eav\Model\Entity\Collection\AbstractCollection;
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(\Gladd\Demo\Model\Item::class, \Gladd\Demo\Model\ResourceModel\Item::class);
    }
}