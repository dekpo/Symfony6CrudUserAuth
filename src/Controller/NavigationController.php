<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class NavigationController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('navigation/home.html.twig', [
            'controller_name' => 'NavigationController',
        ]);
    }
    #[Route('/gallery', name: 'app_gallery')]
    public function gallery(): Response
    {
        return $this->render('navigation/gallery.html.twig', [
            'controller_name' => 'NavigationController',
        ]);
    }
    #[IsGranted('ROLE_USER')]
    #[Route('/member', name: 'app_member')]
    public function member(): Response
    {
        return $this->render('navigation/member.html.twig', [
            'controller_name' => 'NavigationController',
        ]);
    }
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin', name: 'app_admin')]
    public function admin(): Response
    {
        return $this->render('navigation/admin.html.twig', [
            'controller_name' => 'NavigationController',
        ]);
    }
}
