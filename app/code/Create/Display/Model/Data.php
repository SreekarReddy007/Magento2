<?php
 
namespace Create\Display\Model;
 
use Magento\Framework\Model\AbstractModel;
 
class Data extends AbstractModel
{
   /**
    * Define resource model
    */
   protected function _construct()
   {
       $this->_init('Create\Display\Model\ResourceModel\Data');
   }
}