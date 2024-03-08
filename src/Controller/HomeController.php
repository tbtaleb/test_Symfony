<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController{
    /**
     * @Route("/",name="home")
     * @return response
     */
    #[Route('/home',name:'home1')]
    public function index(): Response{
        return $this->render('demo/home.html.twig');
    }
}