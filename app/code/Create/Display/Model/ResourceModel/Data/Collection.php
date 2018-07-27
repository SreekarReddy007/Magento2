<?php
 
namespace Create\Display\Model\ResourceModel\Data;
 
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
 
class Collection extends AbstractCollection
{
   protected function _construct()
   {
       $this->_init(
           'Create\Display\Model\Data',
           'Create\Display\Model\ResourceModel\Data'
       );
   }
}