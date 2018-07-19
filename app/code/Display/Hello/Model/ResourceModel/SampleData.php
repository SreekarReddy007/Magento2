<?php
 
namespace Display\Hello\Model\ResourceModel;
 
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
 
class SampleData extends AbstractDb
{
   /**
    * Define main table
    */
   protected function _construct()
   {
       $this->_init('display_hello', 'podt_id');
   }
}