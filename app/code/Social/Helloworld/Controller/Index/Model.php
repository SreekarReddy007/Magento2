<?php
namespace Social\Helloworld\Controller\Index;

class Model extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	protected $_sampleFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Social\Helloworld\Model\SampleFactory $sampleFactory
		)
	{
		$this->_pageFactory = $pageFactory;
		$this->_sampleFactory = $sampleFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		$post = $this->_sampleFactory->create();
		
		$collection = $post->getCollection();
		foreach($collection as $item){
			echo "<pre>";
			print_r($item->getData());
			echo "</pre>";
		}
		exit();
		return $this->_pageFactory->create();
	}
}