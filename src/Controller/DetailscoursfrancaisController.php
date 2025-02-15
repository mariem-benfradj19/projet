<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DetailscoursfrancaisController extends AbstractController{
    #[Route('/detailscoursfrancais', name: 'app_detailscoursfrancais')]
    public function index(): Response
    {
        return $this->render('detailscoursfrancais.html.twig', [
            'controller_name' => 'DetailscoursfrancaisController',
        ]);
    }
}
