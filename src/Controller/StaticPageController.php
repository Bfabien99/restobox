<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticPageController extends AbstractController
{
    #[Route('/accueil', name: 'home')]
    public function home(): Response
    {
        return $this->render('static_page/index.html.twig', [
            'controller_name' => 'StaticPageController',
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('static_page/index.html.twig', [
            'controller_name' => 'StaticPageController',
        ]);
    }

    #[Route('/a-propos', name: 'about')]
    public function about(): Response
    {
        return $this->render('static_page/index.html.twig', [
            'controller_name' => 'StaticPageController',
        ]);
    }
}
