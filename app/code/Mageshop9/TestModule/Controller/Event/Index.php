<?php

namespace Mageshop9\TestModule\Controller\Event;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }
    public function execute()
    {
        $message = new \Magento\Framework\DataObject(array('message' => 'Mageshop9'));
        $this->_eventManager->dispatch('mageshop9_testmodule_show_message', ['message_text' => $message]);
        echo $message->getMessage();
        exit;
    }
}
