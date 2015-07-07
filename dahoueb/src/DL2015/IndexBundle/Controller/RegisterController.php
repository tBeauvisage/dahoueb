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
         
         $session=$this->getRequest()->getSession();
        $id=$session->get('user');
        
        if ($id == null ){
            $url=$this->generateUrl('dl2015_nolog');
        return $this->redirect($url);}
        else{
        $challenge = new Challenge();
        $regate = new Regate();
        $voilier = new Voilier();
        $licencie = new Licencie();
        $participe = new Participe();
        
        
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('DL2015IndexBundle:Challenge');
        $curchal = $repository->findByCurrentDate();
        $challenge=$curchal[0];
        $libel = $challenge->getChallenge();
        
        $builder = $this->createFormBuilder(array( $regate, $voilier, $licencie, $participe))
                ->add('regate', 'entity', array('label' => 'Régate',
                                                'class' => 'DL2015IndexBundle:Regate',
                                                'choice_label'=>'libreg',
                                                'query_builder' => function (\DL2015\IndexBundle\Entity\RegateRepository $er)
                                                {
                                                    return $er->getRegate();
                                                }
            ))
    
                
//                ->add('datreg', 'text', array('label' => 'Date régate'))
//                ->add('lieureg', 'text', array('label' => 'Lieu'))
//                ->add('distance', 'text', array('label' => 'Distance'))
//                ->add('nomvoil', 'choice', array('label' => 'voilier(s) non inscrit(s)'))
//                ->add('nomlic', 'choice', array('label' => 'Noms équipiers'))
//                ->add('numlicski', 'choice', array('label' => 'Skipper'))
                ->add('Valider inscription', 'submit')
                ->getForm();
        return $this->render('DL2015IndexBundle::inscription.html.twig', array('form' => $form->createView(),"libel"=>$libel));
        }
    }
    public function noLogAction() {
        return $this->render('DL2015IndexBundle::noLog.html.twig');
    }
}