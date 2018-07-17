<?php
namespace Social\Helloworld\Model\ResourceModel;


class Sample extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	
	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}
	
	protected function _construct()
	{
		$this->_init('social_helloworld_post', 'post_id');
	}
	
}