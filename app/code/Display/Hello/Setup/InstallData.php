<?php
namespace Display\Hello\Setup;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
class InstallData implements InstallDataInterface
{
	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
        $setup->startSetup();
        $tableName = $setup->getTable('display_hello');
		$data = [
            [
                'name' => 'Yuvraj',
                'email' => 'uv12@gamil.com',
            ]    
        ];
		// Insert data to table
        foreach ($data as $item) {
            $setup->getConnection()->insert($tableName, $item);
        }
	}
}