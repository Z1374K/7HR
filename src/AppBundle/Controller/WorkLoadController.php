<?php

namespace AppBundle\Controller;

use AppBundle\Entity\WorkLoad;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Workload controller.
 *
 * @Route("workload")
 */
class WorkLoadController extends Controller
{
    /**
     * Lists all workLoad entities.
     *
     * @Route("/", name="workload_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $workLoads = $em->getRepository('AppBundle:WorkLoad')->findAll();

        return $this->render('workload/index.html.twig', array(
            'workLoads' => $workLoads,
        ));
    }

    /**
     * Creates a new workLoad entity.
     *
     * @Route("/new/{employee_id}", name="workload_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, $employee_id)
    {
        $workLoad = new Workload();
        $workLoad->setEmployee($this->getDoctrine()->getRepository("AppBundle:Employee")->find($employee_id));

        $form = $this->createForm('AppBundle\Form\WorkLoadType', $workLoad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($workLoad);
            $em->flush($workLoad);

            return $this->redirectToRoute('workload_show', array('id' => $workLoad->getId()));
        }

        return $this->render('workload/new.html.twig', array(
            'workLoad' => $workLoad,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a workLoad entity.
     *
     * @Route("/{id}", name="workload_show")
     * @Method("GET")
     */
    public function showAction(WorkLoad $workLoad)
    {
        $deleteForm = $this->createDeleteForm($workLoad);

        return $this->render('workload/show.html.twig', array(
            'workLoad' => $workLoad,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing workLoad entity.
     *
     * @Route("/{id}/edit", name="workload_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, WorkLoad $workLoad)
    {
        $deleteForm = $this->createDeleteForm($workLoad);
        $editForm = $this->createForm('AppBundle\Form\WorkLoadType', $workLoad);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('workload_edit', array('id' => $workLoad->getId()));
        }

        return $this->render('workload/edit.html.twig', array(
            'workLoad' => $workLoad,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a workLoad entity.
     *
     * @Route("/{id}", name="workload_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, WorkLoad $workLoad)
    {
        $form = $this->createDeleteForm($workLoad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($workLoad);
            $em->flush($workLoad);
        }

        return $this->redirectToRoute('workload_index');
    }

    /**
     * Creates a form to delete a workLoad entity.
     *
     * @param WorkLoad $workLoad The workLoad entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(WorkLoad $workLoad)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('workload_delete', array('id' => $workLoad->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
