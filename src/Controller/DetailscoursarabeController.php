<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DetailscoursarabeController extends AbstractController{
    #[Route('/detailscoursarabe', name: 'app_detailscoursarabe')]
    public function index(): Response
    {
        return $this->render('detailscoursarabe.html.twig', [
            'controller_name' => 'DetailscoursarabeController',
        ]);
    }
}
