<?php

namespace GC\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TableauController extends Controller
{
    public function indexAction()
    {

        return $this->render('GCProjetBundle:Site:tableau.html.twig',
            array(
            )
        );
    }
}