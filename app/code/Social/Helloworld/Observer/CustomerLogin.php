<?php

namespace Social\Helloworld\Observer;

use Magento\Framework\Event\ObserverInterface;

class CustomerLogin implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {      
        // echo "Customer Name : ";
        // $customer = $observer->getEvent()->getCustomer();
        // echo ucfirst($customer->getName()); //Get customer name
        // exit;
    }
}

