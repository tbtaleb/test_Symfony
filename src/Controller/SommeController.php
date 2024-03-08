<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SommeController extends AbstractController
{
    public function index()
    {
        return $this->render('somme/index.html.twig', [
            'controller_name' => 'SommeController',
        ]);
    }
    public function somme($a, $b)
    {
        $s = $a + $b;
        return $this->render(
            'demo/somme.html.twig',
            ['op1' => $a, 'op2' => $b, 'somme' => $s]
        );
    }

    //exercice 1 
    // /**
    //  * @Route("/somme/{a}/{b}", name="somme")
    //  */
    // public function somme($a, $b)
    // {
    //     $s = $a + $b;
    //     return $this->render(
    //         'demo/somme.html.twig',
    //         ['op1' => $a, 'op2' => $b, 'somme' => $s]
    //     );
    // }

    
}
