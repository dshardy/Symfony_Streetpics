<?php

namespace Dsh\streetpicsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DshstreetpicsBundle:Default:index.html.twig');
    }
}
