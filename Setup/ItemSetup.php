<?php
/**
 * Copyright © 2018 gladd. All rights reserved.
 */

namespace Gladd\Demo\Setup;

//use Gladd\Demo\Model\ItemFactory;
use Magento\Eav\Model\Entity\Setup\Context;
use Magento\Eav\Model\ResourceModel\Entity\Attribute\Group\CollectionFactory;
use Magento\Eav\Setup\EavSetup;
use Magento\Framework\App\CacheInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class ItemSetup extends EavSetup
{
//    /**
//     * Item model factory
//     *
//     * @var ItemFactory
//     */
//    private $itemFactory;

    /**
     * Init
     *
     * @param ModuleDataSetupInterface $setup
     * @param Context $context
     * @param CacheInterface $cache
     * @param CollectionFactory $attrGroupCollectionFactory
     * @param ItemFactory $itemFactory
     */
    public function __construct(
        ModuleDataSetupInterface $setup,
        Context $context,
        CacheInterface $cache,
        CollectionFactory $attrGroupCollectionFactory
//        ItemFactory $itemFactory
    ) {
//        $this->itemFactory = ItemFactory;
        parent::__construct($setup, $context, $cache, $attrGroupCollectionFactory);
    }

    /**
     * Default entities and attributes
     *
     * @return array
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function getDefaultEntities()
    {
        return [
            'finder_item' => [
                'entity_type_id' => ,
                'entity_model' => \Gladd\Demo\Model\ResourceModel\Item::class,
                'attribute_model' => \Gladd\Demo\Model\ResourceModel\Eav\Attribute::class,
                'table' => 'finder_item_entity',
                'additional_attribute_table' => 'finder_eav_attribute',
                'entity_attribute_collection' => \Gladd\Demo\Model\ResourceModel\Item\Attribute\Collection::class,
                'attributes' => [
                    'name' => [
                        'type' => 'varchar',
                        'label' => 'Name',
                        'input' => 'text',
                        'frontend_class' => 'validate-length maximum-length-255',
                        'sort_order' => 1,
                        'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
                        'searchable' => true,
                    ],
                    'code' => [
                        'type' => 'static',
                        'label' => 'Code',
                        'input' => 'text',
                        'frontend_class' => 'validate-length maximum-length-64',
                        'unique' => true,
                        'sort_order' => 2,
                        'searchable' => true,
                    ],
                    'description' => [
                        'type' => 'text',
                        'label' => 'Description',
                        'input' => 'textarea',
                        'sort_order' => 3,
                        'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
                        'searchable' => true,
                        'wysiwyg_enabled' => true,
                    ],
                    'created_at' => [
                        'type' => 'static',
                        'input' => 'date',
                        'sort_order' => 4,
                        'visible' => false,
                    ],
                    'updated_at' => [
                        'type' => 'static',
                        'input' => 'date',
                        'sort_order' => 5,
                        'visible' => false,
                    ],
                ]
            ]
        ];
    }
}