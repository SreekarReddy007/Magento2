<?php
namespace Crud\Operations\Controller\Index;
 
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Crud\Operations\Model\HelloFactory;
use Magento\Framework\Controller\ResultFactory;
 
class Update extends Action
{
   
   protected $_helloFactory;

   public function __construct(
       Context $context,
      helloFactory $helloFactory,
       ResultFactory $resultFactory
   ) {
       $this->resultFactory = $resultFactory;
       $this->_helloFactory = $helloFactory;
       parent::__construct($context);
   }


	public function execute()
	{
		$post = $this->_helloFactory->create();
		
        // $collection = $post->getCollection();  
       $id= $this->getRequest()->getPostValue("post_id");
       $fname = $this->getRequest()->getPostValue("fname");
       $lname = $this->getRequest()->getPostValue("lname");
       $email = $this->getRequest()->getPostValue("email");
       $mob = $this->getRequest()->getPostValue("mob");        
        // echo"$fname";
		
        // Inserting data into table.
        $post->setData("post_id",$id);
        $post->setData("fname",$fname);
        $post->setData("lname",$lname);
        $post->setData("email", $email);
        $post->setData("mob",$mob);
		$post->save();


        // s
        
        // Redirect to suggestion page
       $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
       $resultRedirect->setPath('crud/index/view');
       return $resultRedirect;
		  
		
	}
}