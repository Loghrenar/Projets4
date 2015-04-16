<?php

namespace GC\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function indexAction()
    {

        return $this->render('GCProjetBundle:Site:contact.html.twig',
            array(
            )
        );
    }
}