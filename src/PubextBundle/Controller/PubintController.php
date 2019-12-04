<?php

namespace PubextBundle\Controller;

use PubextBundle\Entity\Pubint;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Pubint controller.
 *
 */
class PubintController extends Controller
{
    /**
     * Lists all pubint entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pubints = $em->getRepository('PubextBundle:Pubint')->findAll();

        return $this->render('pubint/index.html.twig', array(
            'pubints' => $pubints,
        ));
    }

    /**
     * Creates a new pubint entity.
     *
     */
    public function newAction(Request $request)
    {
        $pubint = new Pubint();
        $form = $this->createForm('PubextBundle\Form\PubintType', $pubint);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $images =$em->getRepository('PubextBundle:Pubint')->findAll();
            foreach ($images as $key=>$value){
                $value->setPhoto(base64_encode(stream_get_contents($value->getPhoto())));
            }
            $em->persist($value);
            $em->flush();

            return $this->redirectToRoute('pubint_show', array('id' => $pubint->getId()));
        }

        return $this->render('pubint/new.html.twig', array(
            'pubint' => $pubint,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pubint entity.
     *
     */
    public function showAction(Pubint $pubint)
    {
        $deleteForm = $this->createDeleteForm($pubint);

        return $this->render('pubint/show.html.twig', array(
            'pubint' => $pubint,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pubint entity.
     *
     */
    public function editAction(Request $request, Pubint $pubint)
    {
        $deleteForm = $this->createDeleteForm($pubint);
        $editForm = $this->createForm('PubextBundle\Form\PubintType', $pubint);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pubint_edit', array('id' => $pubint->getId()));
        }

        return $this->render('pubint/edit.html.twig', array(
            'pubint' => $pubint,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pubint entity.
     *
     */
    public function deleteAction(Request $request, Pubint $pubint)
    {
        $form = $this->createDeleteForm($pubint);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pubint);
            $em->flush();
        }

        return $this->redirectToRoute('pubint_index');
    }

    /**
     * Creates a form to delete a pubint entity.
     *
     * @param Pubint $pubint The pubint entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pubint $pubint)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pubint_delete', array('id' => $pubint->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
