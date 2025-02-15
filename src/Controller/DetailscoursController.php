<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DetailscoursController extends AbstractController{
    #[Route('/detailscours', name: 'app_detailscours')]
    public function index(): Response
    {
        return $this->render('detailscours.html.twig', [
            'controller_name' => 'DetailscoursController',
        ]);
    }
}
