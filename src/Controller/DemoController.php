<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    #[Route('/{username}', name: 'user_name')]
    // public function index(): Response
    // {
    //     return $this->render('demo/index.html.twig', [
    //         'controller_name' => 'DemoController',
    //     ]);
    // }
    public function index2($username): Response
    {
        return $this->render('demo/index.html.twig', [
            'username' => $username,
        ]);
    }

    #[Route('/test/$age', name: 'test')]
    public function test($age): Response
    {
     return $this->render('demo/test.html.twig', [
      'title' =>'Les amies',
     'age' => $age,
      ]);}

    
    
}
