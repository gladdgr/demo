<?php
/**
 * Copyright © 2018 gladd. All rights reserved.
 */

namespace Gladd\Demo\Setup;

use Gladd\Demo\Setup\ItemSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    /**
     * Item setup factory
     *
     * @var ItemSetupFactory
     */
    private $itemSetupFactory;

    public function __construct(
        ItemSetupFactory $itemSetupFactory
    ) {
        $this->itemSetupFactory = $itemSetupFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $itemSetup = $this->itemSetupFactory->create(['setup' => $setup]);
        $itemSetup->installEntities();
    }
}
