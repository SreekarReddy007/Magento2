<?php
 
namespace Crud\Operations\Model\ResourceModel\Hello;
 
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
 
class Collection extends AbstractCollection
{
   protected function _construct()
   {
       $this->_init(
           'Crud\Operations\Model\Hello',
           'Crud\Operations\Model\ResourceModel\Hello'
       );
   }
}