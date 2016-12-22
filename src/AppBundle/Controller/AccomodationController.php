<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Accomodation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Accomodation controller.
 *
 * @Route("accomodation")
 */
class AccomodationController extends Controller
{
    /**
     * Lists all accomodation entities.
     *
     * @Route("/", name="accomodation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $accomodations = $em->getRepository('AppBundle:Accomodation')->findAll();

        return $this->render('accomodation/index.html.twig', array(
            'accomodations' => $accomodations,
        ));
    }

    /**
     * Creates a new accomodation entity.
     *
     * @Route("/new", name="accomodation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $accomodation = new Accomodation();
        $form = $this->createForm('AppBundle\Form\AccomodationType', $accomodation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($accomodation);
            $em->flush($accomodation);

            return $this->redirectToRoute('accomodation_show', array('id' => $accomodation->getId()));
        }

        return $this->render('accomodation/new.html.twig', array(
            'accomodation' => $accomodation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a accomodation entity.
     *
     * @Route("/{id}", name="accomodation_show")
     * @Method("GET")
     */
    public function showAction(Accomodation $accomodation)
    {
        $deleteForm = $this->createDeleteForm($accomodation);

        return $this->render('accomodation/show.html.twig', array(
            'accomodation' => $accomodation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing accomodation entity.
     *
     * @Route("/{id}/edit", name="accomodation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Accomodation $accomodation)
    {
        $deleteForm = $this->createDeleteForm($accomodation);
        $editForm = $this->createForm('AppBundle\Form\AccomodationType', $accomodation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('accomodation_edit', array('id' => $accomodation->getId()));
        }

        return $this->render('accomodation/edit.html.twig', array(
            'accomodation' => $accomodation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a accomodation entity.
     *
     * @Route("/{id}", name="accomodation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Accomodation $accomodation)
    {
        $form = $this->createDeleteForm($accomodation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($accomodation);
            $em->flush($accomodation);
        }

        return $this->redirectToRoute('accomodation_index');
    }

    /**
     * Creates a form to delete a accomodation entity.
     *
     * @param Accomodation $accomodation The accomodation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Accomodation $accomodation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('accomodation_delete', array('id' => $accomodation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
