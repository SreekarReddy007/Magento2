<?php
namespace Social\Helloworld\Setup;

use Magento\Customer\Setup\CustomerSetupFactory;
use Magento\Customer\Model\Customer;
use Magento\Eav\Model\Entity\Attribute\Set as AttributeSet;
use Magento\Eav\Model\Entity\Attribute\SetFactory as AttributeSetFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
 
/**
* @codeCoverageIgnore
*/
class InstallData implements InstallDataInterface
{
    protected $customerSetupFactory;
   
   private $attributeSetFactory;

   public function __construct(
       CustomerSetupFactory $customerSetupFactory,
       AttributeSetFactory $attributeSetFactory
   ) {
       $this->customerSetupFactory = $customerSetupFactory;
       $this->attributeSetFactory = $attributeSetFactory;
   }
 
   
   public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
   {
       
       /** @var CustomerSetup $customerSetup */
       $customerSetup = $this->customerSetupFactory->create(['setup' => $setup]);
       
       $customerEntity = $customerSetup->getEavConfig()->getEntityType('customer');
       $attributeSetId = $customerEntity->getDefaultAttributeSetId();
       
       /** @var $attributeSet AttributeSet */
       $attributeSet = $this->attributeSetFactory->create();
       $attributeGroupId = $attributeSet->getDefaultGroupId($attributeSetId);
       
       $customerSetup->addAttribute(Customer::ENTITY, 'custom_mobile', [
           'type' => 'varchar',
           'label' => 'Mobile Number',
           'input' => 'text',
           'required' => true,
           'visible' => true,
           'user_defined' => true,
           'position' =>999,
           'system' => 0,
       ]);
       
       $attribute = $customerSetup->getEavConfig()->getAttribute(Customer::ENTITY, 'custom_mobile')
       ->addData([
           'attribute_set_id' => $attributeSetId,
           'attribute_group_id' => $attributeGroupId,
           'used_in_forms' => ['adminhtml_customer','adminhtml_customer_address', 'customer_address_edit', 'customer_register_address','customer_account_create'],//you can use other forms also ['adminhtml_customer_address', 'customer_address_edit', 'customer_register_address']
       ]);
       
       $attribute->save();
   }
} 
?>




<!-- < ?php
namespace Social\Helloworld\Setup;
  
use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Eav\Model\Config;
  
class InstallData implements InstallDataInterface
{
    private $eavSetupFactory;
  
    public function __construct(EavSetupFactory $eavSetupFactory, Config $eavConfig)
    {
        $this->eavSetupFactory = $eavSetupFactory;
        $this->eavConfig = $eavConfig;
    }
  
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
  
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'my_custom_size',
            [
                'group' => 'general',
                'type' => 'int',
                'backend' => '',
                'frontend' => '',
                'label' => 'Select Size',
                'input' => 'select',
                'note' => 'My Custom Size',
                'class' => '',
                'source' => 'Social\Helloworld\Model\Config\Source\Options',
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible' => true,
                'required' => false,
                'user_defined' => true,
                'default' => '0',
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => true,
                'used_in_product_listing' => true,
                'unique' => false,
                'option' => [ 
                    'values' => [],
                ]
            ]    
        );  
    }
}
?> -->


