<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ScheduledDrill;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Scheduleddrill controller.
 *
 * @Route("scheduled")
 */
class ScheduledDrillController extends Controller
{
    /**
     * Lists all scheduledDrill entities.
     *
     * @Route("/", name="scheduled_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $scheduledDrills = $em->getRepository('AppBundle:ScheduledDrill')->findAll();

        return $this->render('scheduleddrill/index.html.twig', array(
            'scheduledDrills' => $scheduledDrills,
        ));
    }

    /**
     * Creates a new scheduledDrill entity.
     *
     * @Route("/new", name="scheduled_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $scheduledDrill = new Scheduleddrill();
        $form = $this->createForm('AppBundle\Form\ScheduledDrillType', $scheduledDrill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($scheduledDrill);
            $em->flush();

            return $this->redirectToRoute('scheduled_show', array('id' => $scheduledDrill->getId()));
        }

        return $this->render('scheduleddrill/new.html.twig', array(
            'scheduledDrill' => $scheduledDrill,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a scheduledDrill entity.
     *
     * @Route("/{id}", name="scheduled_show")
     * @Method("GET")
     */
    public function showAction(ScheduledDrill $scheduledDrill)
    {
        $deleteForm = $this->createDeleteForm($scheduledDrill);

        return $this->render('scheduleddrill/show.html.twig', array(
            'scheduledDrill' => $scheduledDrill,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing scheduledDrill entity.
     *
     * @Route("/{id}/edit", name="scheduled_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ScheduledDrill $scheduledDrill)
    {
        $deleteForm = $this->createDeleteForm($scheduledDrill);
        $editForm = $this->createForm('AppBundle\Form\ScheduledDrillType', $scheduledDrill);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('scheduled_edit', array('id' => $scheduledDrill->getId()));
        }

        return $this->render('scheduleddrill/edit.html.twig', array(
            'scheduledDrill' => $scheduledDrill,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a scheduledDrill entity.
     *
     * @Route("/{id}", name="scheduled_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ScheduledDrill $scheduledDrill)
    {
        $form = $this->createDeleteForm($scheduledDrill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($scheduledDrill);
            $em->flush();
        }

        return $this->redirectToRoute('scheduled_index');
    }

    /**
     * Creates a form to delete a scheduledDrill entity.
     *
     * @param ScheduledDrill $scheduledDrill The scheduledDrill entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ScheduledDrill $scheduledDrill)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('scheduled_delete', array('id' => $scheduledDrill->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
