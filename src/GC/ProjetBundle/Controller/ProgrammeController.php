<?php

namespace GC\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProgrammeController extends Controller
{
    public function indexAction()
    {

        return $this->render('GCProjetBundle:Site:programme.html.twig',
            array(
            )
        );
    }
}