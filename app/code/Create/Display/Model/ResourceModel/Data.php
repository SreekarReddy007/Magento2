<?php
 
namespace Create\Display\Model\ResourceModel;
 
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
 
class Data extends AbstractDb
{
   
   protected function _construct()
   {
       $this->_init('new_table', 'post_id');
   }
}