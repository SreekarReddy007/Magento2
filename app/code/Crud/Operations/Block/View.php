<?php
namespace Crud\Operations\Block;
use Crud\Operations\Model\HelloFactory;
class View extends \Magento\Framework\View\Element\Template
{    
   protected $_helloFactory;
   protected $helloCollectionFactory;
       
   public function __construct(
       \Magento\Backend\Block\Template\Context $context,        
       \Crud\Operations\Model\ResourceModel\Hello\CollectionFactory $helloCollectionFactory,        
       array $data = []
   )
   {    
       $this->_helloCollectionFactory = $helloCollectionFactory;    
       parent::__construct($context, $data);
   }
   
   public function getDataCollection()
   {
       $collection = $this->_helloCollectionFactory->create();
       return $collection;
   }
}
?>