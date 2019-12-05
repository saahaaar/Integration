<?php

namespace PubextBundle\Controller;

use PubextBundle\Entity\Pubext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Pubext controller.
 *
 */
class PubextController extends Controller
{
    /**
     * Lists all pubext entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pubexts = $em->getRepository('PubextBundle:Pubext')->findAll();

        return $this->render('pubext/index.html.twig', array(
            'pubexts' => $pubexts,
        ));
    }



    /**
     * Creates a new pubext entity.
     *
     */
    public function newAction(Request $request)
    {
        $pubext = new Pubext();
        $form = $this->createForm('PubextBundle\Form\PubextType', $pubext);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $file=$request->files->get('pubextbundle_pubext')['photo'];
            $uploads_directory=$this->getParameter('uploads_directory');
            $fileName = $file->getClientOriginalName();
            $file->move($uploads_directory,$fileName);
            $pubext->setPhoto($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($pubext);
            $em->flush();

            return $this->redirectToRoute('pubext_show', array('id' => $pubext->getId()));
        }

        return $this->render('pubext/new.html.twig', array(
            'pubext' => $pubext,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pubext entity.
     *
     */
    public function showAction(Pubext $pubext)
    {
        $deleteForm = $this->createDeleteForm($pubext);

        return $this->render('pubext/show.html.twig', array(
            'pubext' => $pubext,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pubext entity.
     *
     */
    public function editAction(Request $request, Pubext $pubext)
    {
        $deleteForm = $this->createDeleteForm($pubext);
        $editForm = $this->createForm('PubextBundle\Form\PubextType', $pubext);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pubext_edit', array('id' => $pubext->getId()));
        }

        return $this->render('pubext/edit.html.twig', array(
            'pubext' => $pubext,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pubext entity.
     *
     */
    public function deleteAction(Request $request, Pubext $pubext)
    {
        $form = $this->createDeleteForm($pubext);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pubext);
            $em->flush();
        }

        return $this->redirectToRoute('pubext_index');
    }

    /**
     * Creates a form to delete a pubext entity.
     *
     * @param Pubext $pubext The pubext entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pubext $pubext)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pubext_delete', array('id' => $pubext->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
