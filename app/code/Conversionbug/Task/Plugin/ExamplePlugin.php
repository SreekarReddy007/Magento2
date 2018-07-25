<?php

namespace Conversionbug\Task\Plugin;

class ExamplePlugin
{

	public function beforeSetTitle(\Conversionbug\Task\Controller\Index\Example $subject, $title)
	{
        // $title = $title . " to ";
		// echo __METHOD__ . "</br>";

		// return [$title];
    }
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result*2;
    }
    
    public function afterGetTitle(\Conversionbug\Task\Controller\Index\Example $subject, $result)
    {
    
        echo __METHOD__ . "</br>";

        return '<h1>'. $result . 'I m from plugin' .'</h1>';

    }
    
    
    public function aroundGetTitle(\Conversionbug\Task\Controller\Index\Example $subject, callable $proceed)
    {

        echo __METHOD__ . " - Before proceed() </br>";
            $result = $proceed();
        echo __METHOD__ . " - After proceed() </br>";


        return $result;
    }  
	
}