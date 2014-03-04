<?php

namespace Dsh\streetpicsBundle\Controller;

use Dsh\StreetpicsBundle\Entity\Photos;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PhotofileController extends Controller
{
    public function PhotoAction()
    {
    $photo = new Photofile();
    $photo->setPhotofile('A Foo Bar');
    $photo->setdateshot('19.99');
  

    $em = $this->getDoctrine()->getManager();
    $em->persist($photo);
    $em->flush();

    return new Response('Created product id '.$photo->getId());    
    
    
    }

}
