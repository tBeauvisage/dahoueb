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

class RegisterController extends Controller {
     public function registerAction() {
        $challenge = new Challenge();
        $regate = new Regate();
        $voilier = new Voilier();
        $licencie = new Licencie();
        $participe = new Participe();
        
        
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('DL2015IndexBundle:Challenge');
        $results = $repository->findByCurrentChallenge();
        
//        $libel = $challenge->getChallenge();
       var_dump($results);
   
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
}