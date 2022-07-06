<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeControler extends AbstractController
{
    /*
     * @Route ("/",name="home")
     */
    public function index(){
        return $this->render('Home/home.twig');
    }
}
