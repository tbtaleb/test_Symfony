<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class SecondController extends AbstractController{
    /**
     * 
     * @return response
     */

    
    #[Route('/ExemplePage2',name:'page2')]
    public function index():Response{
        return $this->render('demo/second.html.twig');
    }
}