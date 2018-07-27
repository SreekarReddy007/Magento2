<?php 

namespace Create\Display\Controller\Account; 
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
 
class Customer extends Action
{
   public function __construct(Context $context,PageFactory $pageFactory)
   {
       $this->resultPageFactory = $pageFactory;
       parent::__construct($context);
   }
 
   public function execute()
   {  
       $resultPage = $this->resultPageFactory->create();
       return $resultPage;
   }
}





