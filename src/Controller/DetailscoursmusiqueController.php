<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DetailscoursmusiqueController extends AbstractController{
    #[Route('/detailscoursmusique', name: 'app_detailscoursmusique')]
    public function index(): Response
    {
        return $this->render('detailscoursmusique.html.twig', [
            'controller_name' => 'DetailscoursmusiqueController',
        ]);
    }
}
