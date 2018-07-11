<?php
namespace Social\Helloworld\Controller\Index;
class Index extends \Magento\Framework\App\Action\Action
{
        public function execute() {
	   echo "controller page";
	
	echo"<br>";
	//To call the methods present in helper class.
	$this->_objectManager->create('Social\Helloworld\Helper\Data')->helperMethod();

	// $this->_redirect('contact');
	// Mage::getUrl('Social/Helloworld/Controller/Index', array('id' => 1));
	echo"<br>";
	
	echo"id : ".$this->getRequest()->getParam('id');
	echo"<br>";
	echo"name : ".$this->getRequest()->getParam('name');
	}
}