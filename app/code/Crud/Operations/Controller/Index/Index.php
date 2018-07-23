<?php
  
namespace Crud\Operations\Controller\Index;
  
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Crud\Operations\Model\HelloFactory;
  
class Index extends Action
{
   
    protected $_modelHelloFactory;
  
    
    public function __construct(
        Context $context,
        HelloFactory $modelHelloFactory
    ) {
        parent::__construct($context);
        $this->_modelHelloFactory = $modelHelloFactory;
    }
  
    public function execute()
    {
        $helloModel = $this->_modelHelloFactory->create();
  
        
        $helloCollection = $helloModel->getCollection();
		
         print_r($helloCollection->getData());
    }
}