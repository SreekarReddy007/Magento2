<?php
namespace Crud\Operations\Block;
use Crud\Operations\Model\HelloFactory;
class Update extends \Magento\Framework\View\Element\Template
{    
    protected $_modelHelloFactory;
    protected $helloCollectionFactory;
        
    public function __construct(
        \Magento\Backend\Block\Template\Context $context, 
        \Magento\Store\Model\StoreManagerInterface $storeManager,       
        \Crud\Operations\Model\HelloFactory $helloCollectionFactory,        
        array $data = []
    )
    {    
        $this->_storeManager = $storeManager;
        $this->_helloCollectionFactory = $helloCollectionFactory;    
        parent::__construct($context, $data);
    }
    
    public function getBaseUrl()
    {
        return $this->_storeManager->getStore()->getBaseUrl();
	}
	public function getFormAction()
    {
        return 'crud/index/edit';
    }
    public function getHelloCollection()
    {   
        $id = $this->getRequest()->getParam('id');
        $collection = $this->_helloCollectionFactory->create();
        $collection = $collection->load($id);
        return $collection;
    }
}
?>