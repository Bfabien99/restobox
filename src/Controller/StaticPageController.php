<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticPageController extends AbstractController
{
    #[Route('/static/page', name: 'app_static_page')]
    public function index(): Response
    {
        return $this->render('static_page/index.html.twig', [
            'controller_name' => 'StaticPageController',
        ]);
    }
}
