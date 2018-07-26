<?php
 
namespace Crud\Operations\Controller\Index;
 
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Crud\Operations\Model\HelloFactory;
use Magento\Framework\Controller\ResultFactory;
 
class Delete extends Action
{
   protected $_messageManager;
   protected $_helloFactory;

   public function __construct(
       Context $context,
       HelloFactory $helloFactory,
       ResultFactory $resultFactory,
       \Magento\Framework\Message\ManagerInterface $messageManager
   ) {
       $this->resultFactory = $resultFactory;
       $this->_helloFactory = $helloFactory;
       $this->_messageManager = $messageManager;
       parent::__construct($context);
   }
 
   public function execute()
   {
       $post = $this->_helloFactory->create();
       

       //fetching record from table
       $post = $this->_helloFactory->create();
       $id = $this->getRequest()->getParam('id');
       $post->load($id);
       $post->delete();

       // Display the succes message
       $this->messageManager->addSuccess(__('Data removed successfully !!!'));
       
       //Redirect to suggestion page
       $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
       $resultRedirect->setPath('crud/index/view');
       return $resultRedirect;
   }
}
?>
