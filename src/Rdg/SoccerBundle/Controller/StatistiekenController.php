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
}
