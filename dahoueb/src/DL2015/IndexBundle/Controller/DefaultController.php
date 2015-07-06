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
        $prop2 = new Proprietaire();
        $prop2 = $repository->findOneBy(array('mail' => $prop->getMail()));
        


        if ($form->isSubmitted()) {
            if ($prop2 == NULL) {
                return $this->render('DL2015IndexBundle::message.html.twig', array('form' => $form->createView()));
            } elseif ($prop->getPassword() != $prop2->getPassword()) {
                return $this->render('DL2015IndexBundle::message.html.twig', array('form' => $form->createView()));
            } else {
                $session = new Session();

                $session->set('user', $prop2->getNommbr());
                $session->set('id', $prop2->getIdmbr());
                $session->set('club', $prop2->getIdclub());
                return $this->render('DL2015IndexBundle::aside2.html.twig');
            }
        }
        return $this->render('DL2015IndexBundle::aside.html.twig', array('form' => $form->createView()));
    }

    public function registerAction() {
        $challenge = new Challenge();
        $regate = new Regate();
        $voilier = new Voilier();
        $licencie = new Licencie();
        $participe = new Participe();

        $form = $this->createFormBuilder(array($challenge, $regate, $voilier, $licencie, $participe))
                ->add('challenge', 'text', array('label' => 'Challenge en cours'))
                ->add('libreg', 'choice', array('label' => 'Régate'))
                ->add('datreg', 'text', array('label' => 'Date régate'))
                ->add('lieureg', 'text', array('label' => 'Lieu'))
                ->add('distance', 'text', array('label' => 'Distance'))
                ->add('nomvoil', 'choice', array('label' => 'voilier(s) non inscrit(s)'))
                ->add('nomlic', 'choice', array('label' => 'Noms équipiers'))
                ->add('numlicski', 'choice', array('label' => 'Skipper'))
                ->add('Valider inscription', 'submit')
                ->getForm();
        return $this->render('DL2015IndexBundle::inscription.html.twig', array('form' => $form->createView()));
    }

    public function logoutAction() {
        $session = $this->getRequest()->getSession();
        $session->clear();
        $url = $this->generateUrl('dl2015_index_homepage');
    return $this->redirect($url);
    
    

        
        
    }

}
