<?php
namespace Social\Helloworld\Model;
class Sample extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'social_helloworld_post';

	protected $_cacheTag = 'social_helloworld_post';

	protected $_eventPrefix = 'social_helloworld_post';

	protected function _construct()
	{
		$this->_init('Social\Helloworld\Model\ResourceModel\Sample');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}