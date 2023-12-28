<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function login(): Response
    {
        return $this->render('users/login.html.twig', [
            'page_title' => 'Login'
        ]);
    }

    #[Route('/logout', name: 'logout')]
    public function logout(): Response
    {
        return $this->redirectToRoute('home');
    }

    #[Route('/signin', name: 'signin')]
    public function signin(): Response
    {
        return $this->render('users/signin.html.twig', [
            'page_title' => 'signin'
        ]);
    }

    #[Route('/profil', name: 'profil')]
    public function profil(): Response
    {
        return $this->render('users/profil.html.twig', [
            'page_title' => 'profil'
        ]);
    }
}
