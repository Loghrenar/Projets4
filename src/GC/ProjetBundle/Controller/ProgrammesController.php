<?php

namespace GC\ProjetBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use GC\ProjetBundle\Entity\Programmes;
use GC\ProjetBundle\Form\ProgrammesType;

/**
 * Programmes controller.
 *
 * @Route("/programmes")
 */
class ProgrammesController extends Controller
{

    /**
     * Lists all Programmes entities.
     *
     * @Route("/", name="programmes")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GCProjetBundle:Programmes')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Programmes entity.
     *
     * @Route("/", name="programmes_create")
     * @Method("POST")
     * @Template("GCProjetBundle:Programmes:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Programmes();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('gc_programmes_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Programmes entity.
     *
     * @param Programmes $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Programmes $entity)
    {
        $form = $this->createForm(new ProgrammesType(), $entity, array(
            'action' => $this->generateUrl('gc_programmes_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Programmes entity.
     *
     * @Route("/new", name="programmes_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Programmes();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Programmes entity.
     *
     * @Route("/{id}", name="programmes_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GCProjetBundle:Programmes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Programmes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Programmes entity.
     *
     * @Route("/{id}/edit", name="programmes_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GCProjetBundle:Programmes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Programmes entity.');
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
    * Creates a form to edit a Programmes entity.
    *
    * @param Programmes $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Programmes $entity)
    {
        $form = $this->createForm(new ProgrammesType(), $entity, array(
            'action' => $this->generateUrl('gc_programmes_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Programmes entity.
     *
     * @Route("/{id}", name="programmes_update")
     * @Method("PUT")
     * @Template("GCProjetBundle:Programmes:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GCProjetBundle:Programmes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Programmes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('gc_programmes_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Programmes entity.
     *
     * @Route("/{id}", name="programmes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GCProjetBundle:Programmes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Programmes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('gc_programmes'));
    }

    /**
     * Creates a form to delete a Programmes entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gc_programmes_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
