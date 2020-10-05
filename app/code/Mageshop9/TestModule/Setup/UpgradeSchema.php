<?php

namespace Mageshop9\TestModule\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        if (version_compare($context->getVersion(), '1.2.1', '<')) {
            if (!$installer->tableExists('mageshop9_testmodule_posts')) {
                $table = $installer->getConnection()->newTable(
                    $installer->getTable('mageshop9_testmodule_posts')
                )
                    ->addColumn(
                        'post_id',
                        \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                        null,
                        [
                            'identity' => true,
                            'nullable' => false,
                            'primary'  => true,
                            'unsigned' => true,
                        ],
                        'Post ID'
                    )
                    ->addColumn(
                        'title',
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        255,
                        ['nullable => false'],
                        'Title'
                    )
                    ->addColumn(
                        'content',
                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                        '64k',
                        [],
                        'Content'
                    )

                    ->setComment('Post Table');
                $installer->getConnection()->createTable($table);
                $installer->getConnection()->addIndex(
                    $installer->getTable('mageshop9_testmodule_posts'),
                    $setup->getIdxName(
                        $installer->getTable('mageshop9_testmodule_posts'),
                        ['title', 'content'],
                        \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
                    ),
                    ['title', 'content'],
                    \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
                );
            }
        }
        $installer->endSetup();
    }
}
