<?php

namespace GC\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $programmes = $this->getDoctrine()
            ->getRepository('GCProjetBundle:Programmes')
            ->findAll();
        $bandeau = $this->getDoctrine()
            ->getRepository('GCProjetBundle:Bandeau')
            ->findAll();
        $playlist = $this->getDoctrine()
            ->getRepository('GCProjetBundle:Playlist')
            ->findAll();
        return $this->render('GCProjetBundle:Default:index.html.twig',
            array(
            'programmes' => $programmes,
                'bandeau' => $bandeau,
                'playlist' => $playlist,

        )
        );
    }
}
