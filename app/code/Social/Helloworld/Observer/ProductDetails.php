<?php
namespace Social\Helloworld\Observer;
use Magento\Framework\Event\ObserverInterface;
use \Magento\Framework\Event\Observer;
use Psr\Log\LoggerInterface;
class ProductDetails implements \Magento\Framework\Event\ObserverInterface
{
    protected $_logger;
    protected $_messageManager;
       public function __construct(
        \Magento\Framework\Message\ManagerInterface $messageManager,
        \Psr\Log\LoggerInterface $logger //log injection
       
       ) {
        $this->_logger = $logger;
       
           $this->_messageManager = $messageManager;
       }
    public function execute(\Magento\Framework\Event\Observer $observer)
    {    
        $name = $observer->getProduct()->getName();
        $this->_messageManager->addSuccess(__("Product name is $name"));
       
        
    }
}