<?php
namespace Social\Helloworld\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
	protected $_sampleFactory;

	public function __construct(\Social\Helloworld\Model\SampleFactory $sampleFactory)
	{
		$this->_sampleFactory = $sampleFactory;
	}

	public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		if (version_compare($context->getVersion(), '1.0.1', '<')) {
			$data = [
				'name'         => "M2 Task",
				'mail'         => "sreekar.reddy@conversionbug.com",
				'tags'         => 'social',
				'status'       => 1
			];
			$post = $this->_sampleFactory->create();
			// $setup->getConnection()
			// ->update($table, ['name' => 'sree']);
			$post->addData($data)->save();
		}
	}
}
