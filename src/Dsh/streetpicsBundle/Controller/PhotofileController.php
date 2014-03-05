<?php

namespace Dsh\streetpicsBundle\Controller;

use Dsh\StreetpicsBundle\Entity\Photos;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PhotofileController extends Controller
	
/*
	{
	    public function PhotostoreAction()
	    {
	    $photo = new Photofile();
	    $photo->setPhotofile('A Foo Bar');
	    $photo->setdateshot('19.99');
	  
	
	    $em = $this->getDoctrine()->getManager();
	    $em->persist($photo);
	    $em->flush();
	
	    return new Response('Created product id '.$photo->getId());    
	    
	    
	    }
*/
	
	
	
	
	{
	    public function PhotoshowAction($photofile)
	
	   {   
	    
	    $displayphotofile = $this->renderView(
        'DshstreetpicsBundle:Photofile:Photo.html.twig',
         array('photofile' => $photofile)
         );

         return new Response($displayphotofile);
       }


   }
	    


    