<?php

namespace Dsh\streetpicsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
       
         $content = $this->renderView(
        'DshstreetpicsBundle:Default:index.html.twig',
         array('name' => $name)
         );

         return new Response($content);
        
        
        
    }
}




