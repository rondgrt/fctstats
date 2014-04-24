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
        $repository = $this->getDoctrine()->getRepository('RdgSoccerBundle:ClubId');
        $clubs = $repository->findAll();
        
        $h2hForm = $this->createFormBuilder($clubs)
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
                
        return $this->render('RdgSoccerBundle:Default:home.html.twig', array('h2hForm' => $h2hForm->createView()));
        //return $this->render('RdgSoccerBundle:Default:home.html.twig');
    }
}
