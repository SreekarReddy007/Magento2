<?php
 
namespace Crud\Operations\Controller\Index;
 
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
 
class Edit extends Action
{
   public function __construct(Context $context,PageFactory $pageFactory)
   {
       $this->resultPageFactory = $pageFactory;
       parent::__construct($context);
   }
 
   public function execute()
   {  
    //    echo"hello";exit();
       $resultPage = $this->resultPageFactory->create();
       return $resultPage;
      $this->redirect('crud/index/update');
   }
}

