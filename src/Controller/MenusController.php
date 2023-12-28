<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenusController extends AbstractController
{
    #[Route('/menus', name: 'all_menus')]
    public function all_menus(): Response
    {
        return $this->render('menus/index.html.twig', [
            'controller_name' => 'MenusController',
        ]);
    }

    #[Route('/menus', name: 'one_menus')]
    public function one_menus(): Response
    {
        return $this->render('menus/index.html.twig', [
            'controller_name' => 'MenusController',
        ]);
    }

    #[Route('/menus', name: 'category_menus')]
    public function category_menus(): Response
    {
        return $this->render('menus/index.html.twig', [
            'controller_name' => 'MenusController',
        ]);
    }
}
