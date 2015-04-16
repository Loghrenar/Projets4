<?php

namespace GC\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Model\UserInterface;

class UtilisateurController extends Controller
{
    public function afficheUsersAction()
    {
        $afficheUser = $this->get('fos_user.user_manager');

        $Users = $afficheUser->findUsers();

        return $this->render("GCProjetBundle:Utilisateurs:index.html.twig", array('Users' => $Users) );
    }

    public function supUsersAction(User $id)
    {
        $em = $this->getDoctrine()->getManager();

        $delUsers = $em->getRepository('GCProjetBundle:User')->find($id);

        $em->remove($delUsers);
        $em->flush();

        return $this->forward("GCProjetBundle:Utilisateurs:afficheUsers");
    }
}