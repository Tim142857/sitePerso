<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Symfony\Component\HttpFoundation\Request;
use CoreBundle\Entity\DemandeContact;

class DefaultController extends Controller {

    public function accueilAction() {
        return $this->render('CoreBundle::Accueil.html.twig');
    }

    public function contactAction(Request $request) {

        $demandeContact = new DemandeContact();

        $nom = $request->request->get('nom');
        $societe = $request->request->get('societe');
        $sujet = $request->request->get('sujet');
        $mail = $request->request->get('mail');
        $message = $request->request->get('message');

        //Enregistrement en base 
        $demandeContact->setNom($nom);
        $demandeContact->setSociete($societe);
        $demandeContact->setSujet($sujet);
        $demandeContact->setMail($mail);
        $demandeContact->setMessage($message);

        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('CoreBundle:DemandeContact');
        $em->persist($demandeContact);
        $em->flush();

        $this->get('session')->getFlashBag()->add('demande de contact', 'Votre demande de contact a bien été envoyée.');

        return $this->render('CoreBundle::Accueil.html.twig');
    }

}
