<?php
namespace Create\Display\Controller\Index;
 
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Create\Display\Model\DataFactory;
use Magento\Framework\Controller\ResultFactory;
 
class Post extends Action
{
   
   protected $_dataFactory;

   public function __construct(
       Context $context,
      dataFactory $dataFactory,
       ResultFactory $resultFactory
   ) {
       $this->resultFactory = $resultFactory;
       $this->_dataFactory = $dataFactory;
       parent::__construct($context);
   }


	public function execute()
	{
		$post = $this->_dataFactory->create();
		
		//  $collection = $post->getCollection();
						 
		// Get Data from form.
	   $name = $this->getRequest()->getPostValue("name");
       $email = $this->getRequest()->getPostValue("email");
       $tel = $this->getRequest()->getPostValue("telephone");
       $comment = $this->getRequest()->getPostValue("comment");        
        // echo"$fname";
		
		// Inserting data into table.
        $post->setName($name);
        $post->setEmail($email);
        $post->setTelephone($tel);
        $post->setcomment($comment);
		$post->save();
        
        $this->messageManager->addSuccess(__('Thanks for Reaching Us ! We will Contact Soon!!!'));
        
        // Redirect to suggestion page
       $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
       $resultRedirect->setPath('contact/account/view');
       return $resultRedirect;
		  
		
	}
}