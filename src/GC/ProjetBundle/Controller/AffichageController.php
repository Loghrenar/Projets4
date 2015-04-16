<?php

namespace GC\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AffichageController extends Controller
{
    public function affichageAction()
    {
        return $this->render('GCProjetBundle:Affichage:index.html.twig', array());
    }
}
