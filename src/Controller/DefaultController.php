<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function indexAction()
    {
        $userName = 'Julien';
        return $this->render('home.html.twig', ["name" => $userName]);
    }

    public function aboutAction()
    {
        return $this->render('about.html.twig');
    }

    public function nameAction($name)
    {
        return $this->render('name.html.twig', ["myName" => $name]);
    }
}