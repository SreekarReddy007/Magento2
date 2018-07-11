<?php
namespace Social\Helloworld\Block;
class Display extends \Magento\Framework\View\Element\Template
{
	public function __construct(\Magento\Framework\View\Element\Template\Context $context)
	{
		parent::__construct($context);
	}

	public function socialShare()
	{
		return __('Hello World Welcome to magento2');
	}
	
}

