<?php

namespace Create\Display\Block;

class Data extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    )
    {
        parent::__construct($context, $data);
       }
    public function getFormAction()
    {
            // companymodule is given in routes.xml
            // controller_name is folder name inside controller folder
            // action is php file name inside above controller_name folder
       
//    echo"$_POST('firstname')";
// echo"ggg";

        //  return '/contact/index/post';
        // $this->_redirect('contact');

        // here controller_name is index, action is booking
    }
}