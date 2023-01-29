<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConnexionController extends AbstractController
{
    #[Route('/',  name: 'connexion')]
    public function index(): Response
    {
        $form=$this->createForm(contactType::class);
        return $this->renderForm('connexion/index.tml.twig',[
        'controller_name' => 'ContactController',
        'formulaire' => $form
        ]);

    }
}