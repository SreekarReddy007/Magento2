<?php

namespace Create\Display\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

class Customer extends \Magento\Framework\App\Action\Action
{
   
    public function execute()
    {
        //  echo 'Y';exit;
        // 1. POST request : Get booking data
        $post = (array) $this->getRequest()->getPost();
       
        if (!empty($post)) {
            // Retrieve your form data
            $firstname   = $post['firstname'];
            $lastname    = $post['lastname'];
            $email       = $post['email'];
           
          
          
            // Doing-something with...

            // Display the succes form validation message
            $this->messageManager->addSuccessMessage('Registration is done !');
            echo" $firstname";

            // Redirect to your form page (or anywhere you want...)
            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setUrl('contact/index/post');

            return $resultRedirect;
        }
        // 2. GET request : Render the booking page 
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}