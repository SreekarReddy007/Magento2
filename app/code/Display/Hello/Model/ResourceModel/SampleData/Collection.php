<?php
 
namespace Display\Hello\Model\ResourceModel\SampleData;
 
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
 
class Collection extends AbstractCollection
{
   protected function _construct()
   {
       $this->_init(
           'Display\Hello\Model\SampleData',
           'Display\Hello\Model\ResourceModel\SampleData'
       );
   }
}