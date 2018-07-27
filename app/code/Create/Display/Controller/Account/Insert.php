<?php
namespace Create\Display\Controller\Account;
 
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Create\Display\Model\DataFactory;
use Magento\Framework\Controller\ResultFactory;
 
class Insert extends Action
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
	   $fname = $this->getRequest()->getPostValue("fname");
       $lname = $this->getRequest()->getPostValue("lname");
       $email = $this->getRequest()->getPostValue("email");
       $mob = $this->getRequest()->getPostValue("mob");        
        // echo"$fname";
		
		// Inserting data into table.
        $post->setFname($fname);
        $post->setLname($lname);
        $post->setEmail($email);
        $post->setMob($mob);
		$post->save();
        
        $this->messageManager->addSuccess(__('Thanks for Reaching Us ! We will Contact Soon!!!'));
        
        // Redirect to suggestion page
       $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
       $resultRedirect->setPath('create/account/view');
       return $resultRedirect;
		  
		
	}
}