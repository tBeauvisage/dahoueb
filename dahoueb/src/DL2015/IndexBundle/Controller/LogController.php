<?php

namespace DL2015\IndexBundle\Controller;

use DL2015\IndexBundle\Entity\Challenge;
use DL2015\IndexBundle\Entity\Regate;
use DL2015\IndexBundle\Entity\Voilier;
use DL2015\IndexBundle\Entity\Licencie;
use DL2015\IndexBundle\Entity\Proprietaire;
use DL2015\IndexBundle\Entity\Participe;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class LogController extends Controller {

    public function indexAction(Request $request) {
        $prop = new Proprietaire();
        $challenge = new Challenge();
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('DL2015IndexBundle:Challenge');
        $results = $repository->findByCurrentDate();
        $challenge = $results[0];
        $libel = $challenge->getChallenge();
        $form = $this->createFormBuilder($prop)
                ->add('mail', 'text')
                ->add('password', 'password')
                ->add('Login', 'submit')
                ->getForm();
        $form->handleRequest($request);

        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('DL2015IndexBundle:Proprietaire')
        ;
        $prop2 = new Proprietaire();
        $prop2 = $repository->findOneBy(array('mail' => $prop->getMail()));



        if ($form->isSubmitted()) {
            if ($prop2 == NULL) {
                return $this->render('DL2015IndexBundle::message.html.twig', array('form' => $form->createView(), "libel" => $libel));
            } elseif ($prop->getPassword() != $prop2->getPassword()) {
                return $this->render('DL2015IndexBundle::message.html.twig', array('form' => $form->createView(), "libel" => $libel));
            } else {
                $session = new Session();

                $session->set('user', $prop2->getNommbr());
                $session->set('id', $prop2->getIdmbr());
                $session->set('club', $prop2->getIdclub());
                return $this->render('DL2015IndexBundle::aside2.html.twig', array("libel" => $libel));
            }
        }
        return $this->render('DL2015IndexBundle::aside.html.twig', array('form' => $form->createView(), "libel" => $libel));
    }

    public function logoutAction() {
        $session = $this->getRequest()->getSession();
        $session->clear();
        $url = $this->generateUrl('dl2015_index_homepage');
        return $this->redirect($url);
    }

}
