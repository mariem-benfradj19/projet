<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DetailscoursscienceController extends AbstractController{
    #[Route('/detailscoursscience', name: 'app_detailscoursscience')]
    public function index(): Response
    {
        return $this->render('detailscoursscience.html.twig', [
            'controller_name' => 'DetailscoursscienceController',
        ]);
    }
}
