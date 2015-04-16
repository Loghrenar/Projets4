<?php

namespace GC\ProjetBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use GC\ProjetBundle\Entity\Informations;
use GC\ProjetBundle\Form\InformationsType;

/**
 * Informations controller.
 *
 * @Route("/informations")
 */
class InformationsController extends Controller
{

    /**
     * Lists all Informations entities.
     *
     * @Route("/", name="informations")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GCProjetBundle:Informations')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Informations entity.
     *
     * @Route("/", name="informations_create")
     * @Method("POST")
     * @Template("GCProjetBundle:Informations:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Informations();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('gc_informations_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Informations entity.
     *
     * @param Informations $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Informations $entity)
    {
        $form = $this->createForm(new InformationsType(), $entity, array(
            'action' => $this->generateUrl('gc_informations_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Informations entity.
     *
     * @Route("/new", name="informations_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Informations();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Informations entity.
     *
     * @Route("/{id}", name="informations_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GCProjetBundle:Informations')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Informations entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Informations entity.
     *
     * @Route("/{id}/edit", name="informations_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GCProjetBundle:Informations')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Informations entity.');
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
    * Creates a form to edit a Informations entity.
    *
    * @param Informations $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Informations $entity)
    {
        $form = $this->createForm(new InformationsType(), $entity, array(
            'action' => $this->generateUrl('gc_informations_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Informations entity.
     *
     * @Route("/{id}", name="informations_update")
     * @Method("PUT")
     * @Template("GCProjetBundle:Informations:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GCProjetBundle:Informations')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Informations entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('gc_informations_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Informations entity.
     *
     * @Route("/{id}", name="informations_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GCProjetBundle:Informations')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Informations entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('gc_informations'));
    }

    /**
     * Creates a form to delete a Informations entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gc_informations_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
