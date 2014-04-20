<?php

namespace Rdg\SoccerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RdgSoccerBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function homeAction()
    {
        $repository = $this->getDoctrine()->getRepository('RdgSoccerBundle:Speler');
        $spelers = $repository->findBy(array(),array('achternaam'=>'ASC'));
//        $games = $repository->findBy(
//                array('hometeam' => 'Feyenoord')
//        );
        
        return $this->render('RdgSoccerBundle:Default:home.html.twig', array('spelers' => $spelers));
        //return $this->render('RdgSoccerBundle:Default:home.html.twig');
    }
}
