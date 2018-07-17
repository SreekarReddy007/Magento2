<?php
namespace Social\Helloworld\Observer;

use Magento\Framework\Event\ObserverInterface;

class CustomerLogout implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {      
        echo "Customer Name : ";
        $customer = $observer->getEvent()->getCustomer();
        echo ucfirst($customer->getName()); //Get customer name
        // echo ($customer->gettime());
        echo"<br>";
        echo "logout time ".date('h:i:s a', time());;
        // echo ($date = $this->date->gmtDate());
        exit;
    }
}

