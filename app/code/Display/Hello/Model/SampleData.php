<?php
 
namespace Display\Hello\Model;
 
use Magento\Framework\Model\AbstractModel;
 
class SampleData extends AbstractModel
{
   /**
    * Define resource model
    */
   protected function _construct()
   {
       $this->_init('Display\Hello\Model\ResourceModel\SampleData');
   }
}