<?php

namespace Mageshop9\TestModule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $data = [
            'title' => "Magento Modules",
            'content' => "This post is all about Magento modules.",

        ];

        $setup->getConnection()
            ->insertForce($setup->getTable('mageshop9_testmodule_posts'), $data);
    }
}
