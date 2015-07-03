<?php

namespace DL2015\IndexBundle\Controller;

use DL2015\IndexBundle\Entity\Proprietaire;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction(Request $request) {
        $prop = new Proprietaire();
        $form = $this->createFormBuilder($prop)
                ->add('mail', 'text')
                ->add('password', 'text')
                ->add('Login', 'submit')
                ->getForm();
        $form->handleRequest($request);

        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('DL2015IndexBundle:Proprietaire')
        ;
        
        $prop2 = $repository->findOneBy(array('mail' => $prop->getMail()));

        if ($form->isSubmitted()) {
            if ($prop2 == NULL) {
                return $this->render('DL2015IndexBundle::message.html.twig', array('form' => $form->createView()));
            }
        }
        return $this->render('DL2015IndexBundle::aside.html.twig', array('form' => $form->createView()));
    }

    public function addAction() {

        $article = new Article();
        $article->setContent('Test de base de donées');
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();
        $view = 'DL2015IndexBundle:Default:index.html.twig';
        return $this->render($view);
    }

    public function viewAction($id) {
        $repo = $this->getDoctrine()
                ->getManager()
                ->getRepository('DL2015IndexBundle:Article');
        $article = $repo->find($id);

        if ($article === null) {
            throw new NotFoundHttpException("L'annonce d'id " . $id . " n'existe pas.");
        }
        return $this->render('DL2015IndexBundle::indexLayout.html.twig', array('article' => $article));
    }

}
