<?php

namespace Create\Display\Controller\Index;

class Edit extends \Magento\Contact\Controller\Index\Post
{
 public function execute()
 {
 $this->messageManager->addSuccess('Message from Controller.');
 echo"hello";
  //return parent::execute();
 exit;

 }
} 
