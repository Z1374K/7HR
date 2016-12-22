<?php

namespace AppBundle\Controller;

use AppBundle\Entity\InternalDoc;
use NumberToWords\NumberToWords;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Internaldoc controller.
 *
 * @Route("internaldoc")
 */
class InternalDocController extends Controller
{
    /**
     * Lists all internalDoc entities.
     *
     * @Route("/", name="internaldoc_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $internalDocs = $em->getRepository('AppBundle:InternalDoc')->findAll();

        return $this->render('internaldoc/index.html.twig', array(
            'internalDocs' => $internalDocs,
        ));
    }

    /**
     * Creates a new internalDoc entity.
     *
     * @Route("/new", name="internaldoc_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $internalDoc = new Internaldoc();
        $form = $this->createForm('AppBundle\Form\InternalDocType', $internalDoc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($internalDoc);
            $em->flush($internalDoc);

            return $this->redirectToRoute('internaldoc_show', array('id' => $internalDoc->getId()));
        }

        return $this->render('internaldoc/new.html.twig', array(
            'internalDoc' => $internalDoc,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a internalDoc entity.
     *
     * @Route("/{id}", name="internaldoc_show")
     * @Method("GET")
     */
    public function showAction(InternalDoc $internalDoc)
    {
        $deleteForm = $this->createDeleteForm($internalDoc);

        return $this->render('internaldoc/show.html.twig', array(
            'internalDoc' => $internalDoc,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing internalDoc entity.
     *
     * @Route("/{id}/edit", name="internaldoc_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, InternalDoc $internalDoc)
    {
        $deleteForm = $this->createDeleteForm($internalDoc);
        $editForm = $this->createForm('AppBundle\Form\InternalDocType', $internalDoc);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('internaldoc_edit', array('id' => $internalDoc->getId()));
        }

        return $this->render('internaldoc/edit.html.twig', array(
            'internalDoc' => $internalDoc,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a internalDoc entity.
     *
     * @Route("/{id}", name="internaldoc_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, InternalDoc $internalDoc)
    {
        $form = $this->createDeleteForm($internalDoc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($internalDoc);
            $em->flush($internalDoc);
        }

        return $this->redirectToRoute('internaldoc_index');
    }

    /**
     * Creates a form to delete a internalDoc entity.
     *
     * @param InternalDoc $internalDoc The internalDoc entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(InternalDoc $internalDoc)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('internaldoc_delete', array('id' => $internalDoc->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * @Route("/print/{id}", name="internaldoc_print")
     * @Method("GET")
     */
    public function printDocument($id){
        $repo = $this->getDoctrine()->getRepository("AppBundle:InternalDoc");
        $doc = $repo->find($id);
        $numberToWords =  new NumberToWords();
        $transformer = $numberToWords->getCurrencyTransformer('pl');
        return $this->render("internaldoc/umowa.html.twig",array("internaldoc"=>$doc, 'transformer' => $transformer));
    }

}
