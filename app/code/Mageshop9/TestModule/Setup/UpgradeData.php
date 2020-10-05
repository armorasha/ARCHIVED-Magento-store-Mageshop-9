<?php

namespace Mageshop9\TestModule\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if (version_compare($context->getVersion(), '1.2.4', '<')) {
            $table = $setup->getTable('mageshop9_testmodule_posts');

            $data = [
                'title' => "Magento Modules",
                'content' => "This post is all about Magento modules.",
            ];

            $setup->getConnection()
                ->insertForce($table, $data);

            $setup->getConnection()
                ->update($table, $data);
        }
        $setup->endSetup();
    }
}
