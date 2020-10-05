<?php

namespace Mageshop9\TestModule\Model;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'mageshop9_testmodule_posts';
    protected $_cacheTag = 'mageshop9_testmodule_posts';
    protected $_eventPrefix = 'mageshop9_testmodule_posts';
    protected function _construct()
    {
        $this->_init('Mageshop9\TestModule\Model\ResourceModel\Post');
    }
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
    public function getDefaultValues()
    {
        $values = [];
        return $values;
    }
}
