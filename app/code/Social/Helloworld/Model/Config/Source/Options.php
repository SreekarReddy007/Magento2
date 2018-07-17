<?php 
namespace Social\Helloworld\Model\Config\Source;
  
use Magento\Eav\Model\ResourceModel\Entity\Attribute\OptionFactory;
use Magento\Framework\DB\Ddl\Table;
  
class Options extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{ 
    public function getAllOptions()
    {
        
        $this->_options = [ 
            ['label'=>'', 'value'=>''],
            ['label'=>'Small', 'value'=>'1'],
            ['label'=>'Medium', 'value'=>'2'],
            ['label'=>'Large', 'value'=>'3']
        ];
        return $this->_options;
    }
  
    
    public function getOptionText($value)
    {
        foreach ($this->getAllOptions() as $option) {
            if ($option['value'] == $value) {
                return $option['label'];
            }
        }
        return false;
    }
}