<?php
 
namespace Crud\Operations\Model;
 
use Magento\Framework\Model\AbstractModel;
 
class Hello extends AbstractModel
{
   /**
    * Define resource model
    */
   protected function _construct()
   {
       $this->_init('Crud\Operations\Model\ResourceModel\Hello');
   }
}