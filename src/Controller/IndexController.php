<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
     public function sejabemvindo()
    {
        return new Response(
            '<html><body>Seja bem vindo</body></html>'
        );
    }
}
