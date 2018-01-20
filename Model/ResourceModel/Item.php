<?php
/**
 * Copyright © 2017 gladd. All rights reserved.
 */

namespace Gladd\Demo\Model\ResourceModel;

use Magento\Eav\Model\Entity\AbstractEntity;
class Item extends AbstractEntity
{
    protected function _construct()
    {
        // In some exampled here goes read and write settings
        // but in magento modules this is empty
        // TODO: Check if this function is necessary
    }

    public function getEntityType()
    {
        if(empty($this->_type)) {
            $this->setType(\Gladd\Demo\Model\Item::ENTITY);
        }
        return parent::getEntityType();
    }
}