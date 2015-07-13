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

    public function regateAction(Request $request) {

        $session = $this->getRequest()->getSession();
        $id = $session->get('user');


        if ($id == null) {
            $url = $this->generateUrl('dl2015_nolog');
            return $this->redirect($url);
        } else {
            $session->remove('regate');
            $challenge = new Challenge();
            $regate = new Regate();



            $repository = $this
                    ->getDoctrine()
                    ->getManager()
                    ->getRepository('DL2015IndexBundle:Challenge');
            $curchal = $repository->findByCurrentDate();
            $challenge = $curchal[0];
            $session->set('challenge', $challenge);
            $libel = $challenge->getChallenge();

            $form = $this->createFormBuilder()
                    ->add('regate', 'entity', array('label' => 'Régate',
                        'class' => 'DL2015IndexBundle:Regate',
                        'choice_label' => 'libreg',
                        'query_builder' => function (\DL2015\IndexBundle\Entity\RegateRepository $er) {
                            return $er->getRegate();
                        }
                    ))
                    ->add('Valider inscription', 'submit')
                    ->getForm();
            $form->handleRequest($request);
            $chooseReg = $form->getData();
            $regate = $chooseReg['regate'];
            if ($form->isSubmitted()) {
                $session->set('regate', $regate);
                $url = $this->generateUrl('dl2015_voilier');
                return $this->redirect($url);
            }
            return $this->render('DL2015IndexBundle::regate.html.twig', array('form' => $form->createView(), "libel" => $libel));
        }
    }

    public function noLogAction() {
        return $this->render('DL2015IndexBundle::noLog.html.twig');
    }

    public function voilierAction(Request $request) {


        $challenge = new Challenge();
        $regate = new Regate();
        $voilier = new Voilier();
        $participe = new Participe;
        $session = $this->getRequest()->getSession();
        $id = $session->get('id');
        $challenge = $session->get('challenge');
        $regate = $session->get('regate');
        $session->remove('voilier');
        $libelChal = $challenge->getChallenge();
        $libelReg = $regate->getLibreg();
        var_dump($id);



        $form = $this->createFormBuilder()
                ->add('voilier', 'entity', array('label' => 'Voilier',
                    'class' => 'DL2015IndexBundle:Voilier',
                    'choice_label' => 'nomvoil',
                    'query_builder' => function (\DL2015\IndexBundle\Entity\VoilierRepository $er) use ($id) {
                        return $er->getVoilier($id);
                    }
                ))
                ->add('Valider', 'submit')
                ->getForm();
        $form->handleRequest($request);
        $chooseVoil = $form->getData();
        $voilier = $chooseVoil['voilier'];



        if ($form->isSubmitted()) {
            $numvoil = $voilier->getNumvoil();
            $idregate = $regate->getNumreg();
            $repository = $this
                    ->getDoctrine()
                    ->getManager()
                    ->getRepository('DL2015IndexBundle:Participe');
            $participe = $repository->getPart($numvoil, $idregate);
            if (empty($participe)) {
                $session->set('voilier', $voilier);
                $url = $this->generateUrl('dl2015_proprio');
                return $this->redirect($url);
            } else {
                $url = $this->generateUrl('dl2015_voilier_error');
                return $this->redirect($url);
            }
        }

        return $this->render('DL2015IndexBundle::voilier.html.twig', array("libelchal" => $libelChal, "libelreg" => $libelReg, 'form' => $form->createView()));
    }

    public function noVoilierAction() {
        return $this->render('DL2015IndexBundle::noVoil.html.twig');
    }

    public function proprietaireAction(Request $request) {

        $challenge = new Challenge();
        $regate = new Regate();
        $voilier = new Voilier();
        $participe = new Participe;
        $session = $this->getRequest()->getSession();
        $id = $session->get('id');
        $challenge = $session->get('challenge');
        $regate = $session->get('regate');
        $voilier = $session->get('voilier');
        $session->remove('equipage');
        $libelChal = $challenge->getChallenge();
        $libelReg = $regate->getLibreg();
        $nomvoil = $voilier->getNomvoil();
        $data = array();
        $form = $this->createFormBuilder($data)
                ->add('choix', 'choice', array(
                    'choices' => array('true' => 'Oui', 'false' => 'Non'),
                    'expanded' => true,
                    'multiple' => false))
                ->add('Valider', 'submit')
                ->getForm();
        $form->handleRequest($request);
        $data = $form->getData();
        var_dump($data);

        if ($form->isSubmitted()) {
            $choix = $data['choix'];
            if ($choix == 'true') {
                $equipage = array();
                array_push($equipage, $id);

                $session->set('equipage', $equipage);
                $url = $this->generateUrl('dl2015_equip1');
                return $this->redirect($url);
            } else {
                $url = $this->generateUrl('dl2015_equip2');
                return $this->redirect($url);
            }
        }



        return $this->render('DL2015IndexBundle::proprio.html.twig', array("libelchal" => $libelChal, "libelreg" => $libelReg, 'nomvoil' => $nomvoil, 'form' => $form->createView()));
    }

    public function equip1Action(Request $request) {
        
        $challenge = new Challenge();
        $regate = new Regate();
        $voilier = new Voilier();
        $participe = new Participe;
        $session = $this->getRequest()->getSession();
        $challenge = $session->get('challenge');
        $regate = $session->get('regate');
        $voilier = $session->get('voilier');
        $libelChal = $challenge->getChallenge();
        $libelReg = $regate->getLibreg();
        $nomvoil = $voilier->getNomvoil();
        return $this->render('DL2015IndexBundle::equip1.html.twig', array("libelchal" => $libelChal, "libelreg" => $libelReg, 'nomvoil' => $nomvoil));
    }

}
