<?php
namespace Display\Hello\Block;
class Category extends \Magento\Framework\View\Element\Template
{
   protected $_categoryCollectionFactory;
 
   public function __construct(
       \Magento\Framework\View\Element\Template\Context $context,
       \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory,
       array $data = []
   ) {
       $this->_categoryCollectionFactory = $categoryCollectionFactory;
       parent::__construct($context, $data);
   }
 
   public function getCategoryCollection() {
       $collection = $this->_categoryCollectionFactory->create();
       $collection->addAttributeToSelect('*');
       return $collection;
   }
}