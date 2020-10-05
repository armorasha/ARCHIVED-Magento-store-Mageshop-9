<?php

namespace Mageshop9\TestModule\Block;

class Views extends \Magento\Framework\View\Element\Template
{
    protected $_postFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Mageshop9\TestModule\Model\PostFactory $postFactory
    ) {
        $this->_postFactory = $postFactory;
        parent::__construct($context);
    }
    public function getPostCollection()
    {
        $post = $this->_postFactory->create();
        return $post->getCollection();
    }
}
