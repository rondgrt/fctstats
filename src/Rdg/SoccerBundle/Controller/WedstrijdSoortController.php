<?php

namespace Rdg\SoccerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Rdg\SoccerBundle\Entity\WedstrijdSoort;
use Rdg\SoccerBundle\Form\WedstrijdSoortType;

/**
 * WedstrijdSoort controller.
 *
 * @Route("/cms/wedstrijdsoort")
 */
class WedstrijdSoortController extends Controller
{

    /**
     * Lists all WedstrijdSoort entities.
     *
     * @Route("/", name="cms_wedstrijdsoort")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RdgSoccerBundle:WedstrijdSoort')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new WedstrijdSoort entity.
     *
     * @Route("/", name="cms_wedstrijdsoort_create")
     * @Method("POST")
     * @Template("RdgSoccerBundle:WedstrijdSoort:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new WedstrijdSoort();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cms_wedstrijdsoort__show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a WedstrijdSoort entity.
    *
    * @param WedstrijdSoort $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(WedstrijdSoort $entity)
    {
        $form = $this->createForm(new WedstrijdSoortType(), $entity, array(
            'action' => $this->generateUrl('cms_wedstrijdsoort__create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new WedstrijdSoort entity.
     *
     * @Route("/new", name="cms_wedstrijdsoort_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new WedstrijdSoort();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a WedstrijdSoort entity.
     *
     * @Route("/{id}", name="cms_wedstrijdsoort_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RdgSoccerBundle:WedstrijdSoort')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find WedstrijdSoort entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing WedstrijdSoort entity.
     *
     * @Route("/{id}/edit", name="cms_wedstrijdsoort_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RdgSoccerBundle:WedstrijdSoort')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find WedstrijdSoort entity.');
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
    * Creates a form to edit a WedstrijdSoort entity.
    *
    * @param WedstrijdSoort $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(WedstrijdSoort $entity)
    {
        $form = $this->createForm(new WedstrijdSoortType(), $entity, array(
            'action' => $this->generateUrl('cms_wedstrijdsoort__update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing WedstrijdSoort entity.
     *
     * @Route("/{id}", name="cms_wedstrijdsoort_update")
     * @Method("PUT")
     * @Template("RdgSoccerBundle:WedstrijdSoort:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RdgSoccerBundle:WedstrijdSoort')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find WedstrijdSoort entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cms_wedstrijdsoort__edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a WedstrijdSoort entity.
     *
     * @Route("/{id}", name="cms_wedstrijdsoort_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RdgSoccerBundle:WedstrijdSoort')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find WedstrijdSoort entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cms_wedstrijdsoort_'));
    }

    /**
     * Creates a form to delete a WedstrijdSoort entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cms_wedstrijdsoort__delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
