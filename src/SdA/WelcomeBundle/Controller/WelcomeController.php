<?php

namespace SdA\WelcomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SdA\WelcomeBundle\Entity\Contact;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('SdAWelcomeBundle:Welcome:index.html.twig');
    }
    
    public function hackathonAction()
    {
    	return $this->render('SdAWelcomeBundle:Welcome:hackathon.html.twig');
    }
    
    public function aboutAction()
    {
    	return $this->render('SdAWelcomeBundle:Welcome:about.html.twig');
    }

    public function contactAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createFormBuilder($contact)
            ->add('title', 'text', array('label' => 'Titre de votre demande'))
            ->add('content', 'textarea', array('label' => 'Dites nous tout ! :)'))
            ->add('callback', 'email', array('label' => 'Un email pour qu\'on puisse vous répondre !'))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
            'contact',
            'Votre demande sera traitée dans les plus brefs délais !'
            );

            return $this->hackathonAction();
        }
        return $this->render('SdAWelcomeBundle:Welcome:contact.html.twig', array(
            'entity' => $contact,
            'form' => $form->createView()
            ));
    }
}
