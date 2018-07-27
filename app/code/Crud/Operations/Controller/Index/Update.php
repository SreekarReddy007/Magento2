<?php
  
namespace Crud\Operations\Controller\Index;
  
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Crud\Operations\Model\HelloFactory;
use Magento\Framework\Controller\ResultFactory;
  
class Update extends Action
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
        
        //getting values from form
        $id = $this->getRequest()->getParam('post_id');
        $post = $post->load($id);
        $fname = $this->getRequest()->getPostValue("fname");
        $lname = $this->getRequest()->getPostValue("lname");
        $email = $this->getRequest()->getPostValue("email");
        $mob = $this->getRequest()->getPostValue("mob"); 

        //inserting data into database
        //$dataModel->setId($id);
        // $post->setData("post_id",$id);
        $post->setData("fname",$fname);
        $post->setData("lname",$lname);
        $post->setData("email", $email);
        $post->setData("mob",$mob);
		$post->save();

        // Display the succes message
        $this->messageManager->addSuccess(__('Your data has been updated successfully !!!'));
        
        // Redirect to suggestion page 
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setPath('crud/index/view');
        return $resultRedirect;
    }
}