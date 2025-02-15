<?php

namespace App\Controller;

use App\Entity\Course;
use App\Form\CourseType;
use App\Repository\CourseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CoursController extends AbstractController
{
    #[Route('/cours', name: 'app_cours', methods: ['GET'])]
    public function index(CourseRepository $courseRepository): Response
    {
        return $this->render('cours.html.twig', [
            'courses' => $courseRepository->findAll(),
        ]);
    }


    #[Route('/cours/{id}', name: 'app_detailscours', methods: ['GET'])]
    public function show(Course $course): Response
    {
        return $this->render('detailscours.html.twig', [
            'course' => $course, // On passe bien l'objet Course à la vue
        ]);
    }
    




    
    #[Route('/cours/new', name: 'course_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $course = new Course();
        $form = $this->createForm(CourseType::class, $course);
        // Gérer l'envoi du formulaire
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Sauvegarder le cours dans la base de données
            $entityManager->persist($course);
            $entityManager->flush();

            // Rediriger vers la liste des cours après l'ajout
            return $this->redirectToRoute('app_cours');
        }

        return $this->render('addcours.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/cours/{id}/edit', name: 'course_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Course $course, EntityManagerInterface $entityManager): Response
{
    // Formulaire de modification
    $form = $this->createForm(CourseType::class, $course);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Sauvegarde du cours modifié
        $entityManager->flush();
        return $this->redirectToRoute('app_cours');
    }

    return $this->render('modifier.html.twig', [
        'form' => $form->createView(),
        'course' => $course,
    ]);
}

#[Route('/cours/{id}/delete', name: 'course_delete', methods: ['POST'])]
public function delete(Request $request, Course $course, EntityManagerInterface $entityManager): Response
{
    if ($this->isCsrfTokenValid('delete'.$course->getId(), $request->request->get('_token'))) {
        $entityManager->remove($course);
        $entityManager->flush();
    }

    return $this->redirectToRoute('app_cours');
}










}
