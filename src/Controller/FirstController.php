<?php
// src/Controller/FirstController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    /**
     * @Route("/notes", name="notes")
     */
    public function notes(): Response
    {
        $notes = [3, 7, 10, 13, 5, 7, 18];

        return $this->render('first/notes.html.twig', [
            'notes' => $notes,
        ]);
    }
}
