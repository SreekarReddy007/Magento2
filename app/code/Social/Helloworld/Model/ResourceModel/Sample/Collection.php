<?php
namespace Social\Helloworld\Model\ResourceModel\Sample;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'post_id';
	protected $_eventPrefix = 'social_helloworld_post_collection';
	protected $_eventObject = 'sample_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Social\Helloworld\Model\Sample', 'Social\Helloworld\Model\ResourceModel\Sample');
	}

}