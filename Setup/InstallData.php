<?php
/**
 * Created by PhpStorm.
 * User: sakisplus
 * Date: 22/1/18
 * Time: 21:42
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
