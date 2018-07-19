<?php
namespace Display\Hello\Controller\Index;

class Data extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	protected $_sampleDataFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Display\Hello\Model\SampleDataFactory $sampleDataFactory
		)
	{
		$this->_pageFactory = $pageFactory;
		$this->_sampleDataFactory = $sampleDataFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		$post = $this->_sampleDataFactory->create();
		// $this->sales_order_payment_table = $this->getTable("sales_order_payment");

		// print_r($post->getCollection()->getData());exit;

		// $collection = $post->getCollection()
		// 				->addFieldToFilter('name', array('eq' => 'rahul'))
		// 				->addFieldToFilter('email',array('eq' =>'rahul1@gmail.com'));
						
		// $collection = $post->getCollection()
		// 				->addFieldToFilter('name', array('like' => '%r%'));
		// $collection = $post->getCollection()
		// 				->addFieldToFilter('podt_id', array('gt' => '9'));
		// $collection = $post->getCollection()
		// 				->addFieldToFilter('podt_id', array('from' => '1' ,'to'=>'29'));
		// $collection = $post->getCollection()
		// 				->addFieldToFilter('podt_id', array('neq' => '1'));	
		// $collection = $post->getCollection()
		// 				->addFieldToFilter('podt_id', array('in' => '1,31'));	
		// $collection = $post->getCollection()
		// 				->addFieldToFilter('podt_id', array('fineset' => '9'));
		// $collection = $post->getCollection()
		// 				->addFieldToFilter('podt_id', array('nin' => '19'));
		 $collection = $post->getCollection()
						 ->addFieldToFilter('podt_id', array('lteq' => '9'),array('lteq' => '9'));
		
		// $collection->getSelect()->order('podt_id, DESC');
		foreach($collection as $item){
			echo "<pre>";
			print_r($item->getData());
			
			echo "</pre>";
		}
		
			// $data = $post->load(8);
			// 
			// Insert data
			// $post->setName("Rishab");
			//  $post->setEmail("abc@conversionbug.com");
			//   $post->setPhoneNo("9638527410");
			//   print_r($data->getData());exit;
			//   $post->save();
			// $post->setName("Rahul",2);
			//   $post->save();
			// $post->load(6);
			//  $post->delete();
			//  $post->save();
		  exit();
		return $this->_pageFactory->create();
	}
}