<?php
 namespace Display\Hello\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
	protected $_sampleDataFactory;

	public function __construct(\Social\Helloworld\Model\SampleFactory $sampleDataFactory)
	{
		$this->_sampleDataFactory = $sampleDataFactory;
	}

	public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		if (version_compare($context->getVersion(), '1.0.1', '<=')) {
			$data = [
				'name'         => "Sourav",
				'email'         => "sourav12@gmail.com",
				'PhoneNo'       => 7418529630
			];
			$post = $this->_sampleDataFactory->create();
			// $setup->getConnection()
			// ->update($table, ['name' => 'sree']);
			$post->addData($data)->save();
		}
	}
} 

// <?php
// namespace Display\Hello\Setup;
  
// use Magento\Framework\Setup\UpgradeDataInterface;
// use Magento\Framework\Setup\ModuleDataSetupInterface;
// use Magento\Framework\Setup\ModuleContextInterface;
  
// class UpgradeData implements UpgradeDataInterface
// {
//     public function upgrade(
//         ModuleDataSetupInterface $setup,
//         ModuleContextInterface $context
//     ) {
//         $setup->startSetup();
  
//         if (version_compare($context->getVersion(), '1.0.1') <= 0 ) {
//             // Get emipro_sampletable table
//             $tableName = $setup->getTable('display_hello');
//             // Check if the table already exists
//             if ($setup->getConnection()->isTableExists($tableName) == true) {
//                 // Declare data
//                 $data = [
//                         'name' => 'sourav',
//                         'email' => 'sourav11@gmail.com',
//                         'PhoneNo' => '8527419630'
//                 ];
  
//                 // Insert data to table
//                 foreach ($data as $item) {
//                      $setup->getConnection()->update($tableName, $item);
//                 // }
//                 // $setup->getConnection()->update($tableName,$data, 'entity_id IN (7)');
//                 //$setup->getConnection()->delete($tableName, 'entity_id IN (9)');
//             }
//         }
  
//         $setup->endSetup();
//     }
// }
// }