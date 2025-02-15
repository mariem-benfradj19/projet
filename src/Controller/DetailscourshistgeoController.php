<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DetailscourshistgeoController extends AbstractController{
    #[Route('/detailscourshistgeo', name: 'app_detailscourshistgeo')]
    public function index(): Response
    {
        return $this->render('detailscourshistgeo.html.twig', [
            'controller_name' => 'DetailscourshistgeoController',
        ]);
    }
}
