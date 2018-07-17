<?php
namespace Social\Helloworld\Controller\Index;
class Event extends \Magento\Framework\App\Action\Action
{
	public function execute()
	{
		$textDisplay = new \Magento\Framework\DataObject(array('text' => 'Mageplaza'));
		$this->_eventManager->dispatch('social_helloworld_display_text', ['social_text' => $textDisplay]);
		echo $textDisplay->getText();
		exit;
	}
}