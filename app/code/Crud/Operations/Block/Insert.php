<?php

namespace Crud\Operations\Block;

class Insert extends \Magento\Framework\View\Element\Template
{
    
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    )
    {
        parent::__construct($context, $data);
       }
       public function getBaseUrl()
       {
           return $this->_storeManager->getStore()->getBaseUrl();
       }
    
    public function getFormAction()
    {   
            // companymodule is given in routes.xml
            // controller_name is folder name inside controller folder
            // action is php file name inside above controller_name folder

        return'crud/index/create';
        // here controller_name is index, action is booking
    }
}