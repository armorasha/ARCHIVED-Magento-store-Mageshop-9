<?php

namespace Mageshop9\TestModule\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'post_id';
    protected $_eventPrefix = 'mageshop9_testmodule_post_collection';
    protected $_eventObject = 'post_collection';
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Mageshop9\TestModule\Model\Post', 'Mageshop9\TestModule\Model\ResourceModel\Post');
    }
}
