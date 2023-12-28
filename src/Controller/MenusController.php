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
            'page_title' => 'Tous les menus'
        ]);
    }

    #[Route('/menus/{id}', name: 'one_menus', requirements: ['id' => '\d+'])]
    public function one_menus(int $id): Response
    {
        return $this->render('menus/one.html.twig', [
            'page_title' => "le menus $id"
        ]);
    }

    #[Route('/menus/category/{name}', name: 'category_menus')]
    public function category_menus(string $name): Response
    {
        return $this->render('menus/category.html.twig', [
            'page_title' => "les menus de la categorie $name"
        ]);
    }
}
