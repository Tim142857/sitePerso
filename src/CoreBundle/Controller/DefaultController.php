<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function accueilAction() {
        return $this->render('CoreBundle::Accueil.html.twig');
    }

}
