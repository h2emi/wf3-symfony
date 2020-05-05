<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\UserRepository;

class DefaultController extends AbstractController
{
    public function indexAction(UserRepository $userRepository)
    {
        $users = $userRepository->findAll();
        return $this->render('home.html.twig', ["users" => $users]);
    }

    public function aboutAction()
    {
        $fruits = [
            ["name"=>"berry", "price"=>8, "allergy"=>['pollen', 'autre chose']],
            ["name"=>"coconut", "price"=>12]
        ];
        return $this->render('about.html.twig', ["fruits"=>$fruits]);
    }

    public function nameAction($name)
    {
        return $this->render('name.html.twig', ["myName" => $name]);
    }
}