<?php
namespace Social\Helloworld\Observer;
use Magento\Framework\Event\ObserverInterface; 
class OrderDetails implements ObserverInterface
{ 
    protected $_order;
       public function __construct(
               \Magento\Sales\Api\Data\OrderInterface $order) 
        {
               $this->_order = $order;    
        }
       public function execute(\Magento\Framework\Event\Observer $observer)
       {
            $orderids = $observer->getEvent()->getOrderIds();
            $order = $this->_order->load($orderids);
            // Fetch specific order information
            echo " Thank you for Purshasing Our Product";
            echo '<br>';
            echo "Total Amount : ".$order->getGrandTotal();
            echo '<br>';
                        
            // Fetch order customer information
            echo "Customer ID :".$order->getCustomerId();
            echo '<br>';
            echo $order->getCustomerEmail();
            echo '<br>';        
            echo "Customer F.Name :".$order->getCustomerFirstname();
            echo '<br>';
            echo "Customer F.Name :".$order->getCustomerLastname();
            echo '<br>';
            // Fetch order items information
            foreach ($order->getAllItems() as $item)
            {
             echo "ProductName : ".$item->getName();
             echo '<br>';
             echo "Product SKU : ".$item->getSKU();
             echo '<br>';
                        
            exit;
            }
       }
}
   