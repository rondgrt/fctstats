<?php

namespace Rdg\SoccerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Rdg\SoccerBundle\Entity\ScheidsrechterId;
use Rdg\SoccerBundle\Form\ScheidsrechterIdType;

/**
 * ScheidsrechterId controller.
 *
 * @Route("/cms/scheidsrechters/")
 */
class ScheidsrechterController extends Controller
{

    /**
     * Lists all ScheidsrechterId entities.
     *
     * @Route("/", name="cms_scheidsrechters_")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RdgSoccerBundle:ScheidsrechterId')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new ScheidsrechterId entity.
     *
     * @Route("/", name="cms_scheidsrechters__create")
     * @Method("POST")
     * @Template("RdgSoccerBundle:ScheidsrechterId:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new ScheidsrechterId();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cms_scheidsrechters__show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a ScheidsrechterId entity.
    *
    * @param ScheidsrechterId $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(ScheidsrechterId $entity)
    {
        $form = $this->createForm(new ScheidsrechterIdType(), $entity, array(
            'action' => $this->generateUrl('cms_scheidsrechters__create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ScheidsrechterId entity.
     *
     * @Route("/new", name="cms_scheidsrechters__new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ScheidsrechterId();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a ScheidsrechterId entity.
     *
     * @Route("/{id}", name="cms_scheidsrechters__show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RdgSoccerBundle:ScheidsrechterId')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ScheidsrechterId entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ScheidsrechterId entity.
     *
     * @Route("/{id}/edit", name="cms_scheidsrechters__edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RdgSoccerBundle:ScheidsrechterId')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ScheidsrechterId entity.');
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
    * Creates a form to edit a ScheidsrechterId entity.
    *
    * @param ScheidsrechterId $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ScheidsrechterId $entity)
    {
        $form = $this->createForm(new ScheidsrechterIdType(), $entity, array(
            'action' => $this->generateUrl('cms_scheidsrechters__update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ScheidsrechterId entity.
     *
     * @Route("/{id}", name="cms_scheidsrechters__update")
     * @Method("PUT")
     * @Template("RdgSoccerBundle:ScheidsrechterId:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RdgSoccerBundle:ScheidsrechterId')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ScheidsrechterId entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cms_scheidsrechters__edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a ScheidsrechterId entity.
     *
     * @Route("/{id}", name="cms_scheidsrechters__delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RdgSoccerBundle:ScheidsrechterId')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ScheidsrechterId entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cms_scheidsrechters_'));
    }

    /**
     * Creates a form to delete a ScheidsrechterId entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cms_scheidsrechters__delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
