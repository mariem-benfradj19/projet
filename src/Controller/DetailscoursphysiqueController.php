<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DetailscoursphysiqueController extends AbstractController{
    #[Route('/detailscoursphysique', name: 'app_detailscoursphysique')]
    public function index(): Response
    {
        return $this->render('detailscoursphysique.html.twig', [
            'controller_name' => 'DetailscoursphysiqueController',
        ]);
    }
}
