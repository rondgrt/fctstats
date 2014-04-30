<?php

namespace Rdg\SoccerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RdgSoccerBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function homeAction(Request $request)
    {
        //$alleClubs = $this->getDoctrine()->getRepository('RdgSoccerBundle:ClubId');
        //$clubs = $alleClubs->findAll();
        
        $h2hForm = $this->createFormBuilder()
                ->add('clubnaam', 'entity', array(
                    'class' => 'RdgSoccerBundle:ClubId',
                    'query_builder' => function(EntityRepository $er) {
                        return $er->createQueryBuilder('c')
                                ->orderBy('c.clubnaam', 'ASC');
                    }
                ))
                ->add('Bekijk head2head', 'submit')    
                ->getForm();
        
        $h2hForm->handleRequest($request);        
                
        if ($h2hForm->isValid()) {
            $team = $h2hForm['clubnaam']->getData();
            
            return $this->redirect($this->generateUrl('stats_head2head__show', array('team' => $team)));
        }        
                   
        $perSeizoenForm = $this->createFormBuilder()
                ->add('seizoen', 'entity', array(
                    'class' => 'RdgSoccerBundle:SeizoenId',
                    'query_builder' => function(EntityRepository $er) {
                        return $er->createQueryBuilder('c')
                                ->orderBy('c.seizoen', 'DESC');
                    }
                ))
                ->add('Bekijk wedstrijden', 'submit')    
                ->getForm();
        
        $perSeizoenForm->handleRequest($request);        
                
        if ($perSeizoenForm->isValid()) {
            $seizoen = $perSeizoenForm['seizoen']->getData();
            
            return $this->redirect($this->generateUrl('stats_wedstrijden-seizoen__show', array('seizoen' => $seizoen->getId())));
        }  
        
        return $this->render('RdgSoccerBundle:Default:home.html.twig', array('h2hForm' => $h2hForm->createView(), 'perSeizoenForm' => $perSeizoenForm->createView()));
        //return $this->render('RdgSoccerBundle:Default:home.html.twig');
    }
}
