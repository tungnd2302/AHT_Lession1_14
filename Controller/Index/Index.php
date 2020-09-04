<?php
namespace AHT\HelloWorld\Controller\Index;

use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Customer\Model\SessionFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    
    public function __construct(
   	 \Magento\Framework\App\Action\Context $context,
   	 \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
   	 $this->resultPageFactory = $resultPageFactory;
   	 parent::__construct($context);
    }
    
    public function execute()
    {
   	 $resultPage = $this->resultPageFactory->create();
   	 return $resultPage;
    }
}