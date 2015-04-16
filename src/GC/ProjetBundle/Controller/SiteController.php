<?php

namespace GC\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{
    public function indexAction()
    {

        return $this->render('GCProjetBundle:Site:index.html.twig',
            array(
            )
        );
    }
}