<?php

namespace Create\Display\Block;

use Magento\Framework\View\Element\Template;


class ContactForm extends Template
{
    
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
        $this->_isScopePrivate = true;
    }

    
    public function getFormAction()
    {
        return $this->getUrl('contact/index/post', ['_secure' => true]);
    }
}
