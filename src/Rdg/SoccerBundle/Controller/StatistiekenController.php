<?php

namespace Rdg\SoccerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StatistiekenController extends Controller
{
    public function indexAction()
    {
        //
    }
    
    public function head2headAction($team)
    {
        return $this->render('RdgSoccerBundle:Statistieken:head2head.html.twig', array('team' => $team));
    }
    
    public function wedPerSeizAction($seizoen)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RdgSoccerBundle:Wedstrijd')->findBy(array('seizoenId'=>$seizoen), array('speeljaar' => 'ASC', 'speelmaand' => 'ASC', 'speeldag' => 'ASC'));
        
        return $this->render('RdgSoccerBundle:Statistieken:wedPerSeiz.html.twig', array('entities' => $entities));
    }
    
    
}
