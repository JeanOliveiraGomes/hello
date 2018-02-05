<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller{
    /**
     * @Route("/lucky", name="lucky")
     */
     public function number(){


    $count=1;
    $arr = array();
    $number = mt_rand(0,100);
    array_push($arr, $number);

    	for ($i=0; $i < 5; $i++) { 
    		
    		
    	}
        
        	

        return new Response(
            '<html><body>Lucky number: </body></html>'

        );
    }
    }

