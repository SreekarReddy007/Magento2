<?php
 
namespace Crud\Operations\Model\ResourceModel;
 
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
 
class Hello extends AbstractDb
{
   /**
    * Define main table
    */
   protected function _construct()
   {
       $this->_init('crud_table', 'post_id');
   }
}