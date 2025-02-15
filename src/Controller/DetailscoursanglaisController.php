<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DetailscoursanglaisController extends AbstractController{
    #[Route('/detailscoursanglais', name: 'app_detailscoursanglais')]
    public function index(): Response
    {
        return $this->render('detailscoursanglais.html.twig', [
            'controller_name' => 'DetailscoursanglaisController',
        ]);
    }
}
