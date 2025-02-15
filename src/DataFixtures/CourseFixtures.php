<?php

namespace App\DataFixtures;

use App\Entity\Course;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CourseFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $coursData = [
            ['Mathématiques', 'Description', 'Contenu'],
            ['Science (Ages 7-9)', 'Introduction aux sciences', 'Contenu du cours de sciences'],
            ['HistoireGeo (Ages 7-9)', 'Les grandes civilisations', 'Contenu du cours d’histoire'],
            ['Physique (Ages 10-12)', 'Mécanique et forces', 'Contenu du cours de physique'],
            ['Français (Ages 7-9)', 'Lecture et écriture', 'Contenu du cours de français'],
            ['Anglais (Ages 7-9)', 'Lecture et écriture', 'Contenu du cours de français'],
            ['Arabe (Ages 7-9)', 'Lecture et écriture', 'Contenu du cours de français'],
            ['Musique (Ages 7-9)', 'Lecture et écriture', 'Contenu du cours de français'],




        ];

        foreach ($coursData as $data) {
            $course = new Course();
            $course->setTitre($data[0]);
            $course->setDescription($data[1]);
            $course->setContenu($data[2]);
            $manager->persist($course);
        }

        $manager->flush();
    }
}
