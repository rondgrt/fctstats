<?php

namespace Rdg\SoccerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Rdg\SoccerBundle\Entity\Wedstrijd;
use Rdg\SoccerBundle\Form\WedstrijdType;

/**
 * Wedstrijd controller.
 *
 * @Route("/cms/wedstrijd/")
 */
class WedstrijdController extends Controller
{

    /**
     * Lists all Wedstrijd entities.
     *
     * @Route("/", name="cms_wedstrijd_")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RdgSoccerBundle:Wedstrijd')->findBy(array('seizoenId'=>'23'), array('speeljaar' => 'ASC', 'speelmaand' => 'ASC', 'speeldag' => 'ASC'));
        //$doelpunten = $entities->getDoelpunten();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Wedstrijd entity.
     *
     * @Route("/", name="cms_wedstrijd__create")
     * @Method("POST")
     * @Template("RdgSoccerBundle:Wedstrijd:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Wedstrijd();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cms_wedstrijd__show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Wedstrijd entity.
    *
    * @param Wedstrijd $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Wedstrijd $entity)
    {
        $form = $this->createForm(new WedstrijdType(), $entity, array(
            'action' => $this->generateUrl('cms_wedstrijd__create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Wedstrijd entity.
     *
     * @Route("/new", name="cms_wedstrijd__new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Wedstrijd();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Wedstrijd entity.
     *
     * @Route("/{id}", name="cms_wedstrijd__show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RdgSoccerBundle:Wedstrijd')->find($id);
        
        $doelpunten = $entity->getDoelpunten();
        //usort($doelpunten, "cmp");
        //var_dump($doelpunten);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Wedstrijd entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'doelpunten'  => $doelpunten,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Wedstrijd entity.
     *
     * @Route("/{id}/edit", name="cms_wedstrijd__edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RdgSoccerBundle:Wedstrijd')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Wedstrijd entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Wedstrijd entity.
    *
    * @param Wedstrijd $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Wedstrijd $entity)
    {
        $form = $this->createForm(new WedstrijdType(), $entity, array(
            'action' => $this->generateUrl('cms_wedstrijd__update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Wedstrijd entity.
     *
     * @Route("/{id}", name="cms_wedstrijd__update")
     * @Method("PUT")
     * @Template("RdgSoccerBundle:Wedstrijd:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RdgSoccerBundle:Wedstrijd')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Wedstrijd entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cms_wedstrijd__edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Wedstrijd entity.
     *
     * @Route("/{id}", name="cms_wedstrijd__delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RdgSoccerBundle:Wedstrijd')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Wedstrijd entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cms_wedstrijd_'));
    }

    /**
     * Creates a form to delete a Wedstrijd entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cms_wedstrijd__delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
