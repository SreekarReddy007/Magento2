<?php
namespace Social\Helloworld\Observer;
class ChangeDisplayText implements \Magento\Framework\Event\ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{
		$displayText = $observer->getData('social_text');
		echo $displayText->getText() . " - Event </br>";
		$displayText->setText('Execute event successfully.');
        return $this;
	}
}
