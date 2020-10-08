<?php

namespace Mageshop9\TestModule\Block;

class Newpost extends \Magento\Backend\Block\Widget\Form\Container
{
    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry = null;
    /**
     * @param \Magento\Backend\Block\Widget\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Widget\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }
    /**
     * Initialize blog post edit block
     *
     * @return void
     */
    protected function _construct()
    {

        $this->_objectId = 'post_id';
        $this->_blockGroup = 'Mageshop9_TestModule';
        $this->_controller = 'adminhtml';
        parent::_construct();
    }
}
