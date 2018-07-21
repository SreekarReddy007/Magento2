<?php

namespace Create\Display\Controller\Account;

use Magento\Customer\Model\Registration;
use Magento\Customer\Model\Session;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;

class Create extends \Magento\Customer\Controller\AbstractAccount
{
    
    protected $registration;
    protected $session;
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        Session $customerSession,
        PageFactory $resultPageFactory,
        Registration $registration
    ) {
        $this->session = $customerSession;
        $this->resultPageFactory = $resultPageFactory;
        $this->registration = $registration;
        parent::__construct($context);
    }

    /**
     * Customer register form page
     *
     * @return \Magento\Framework\Controller\Result\Redirect|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        if ($this->session->isLoggedIn() || !$this->registration->isAllowed()) {
            /** @var \Magento\Framework\Controller\Result\Redirect $resultRedirect */
            $resultRedirect = $this->resultRedirectFactory->create();
            $resultRedirect->setPath('*/*');
            return $resultRedirect;
        }

        /** @var \Magento\Framework\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }
}

?>









<!-- < ?php

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
} -->