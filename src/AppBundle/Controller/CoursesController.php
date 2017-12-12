<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Formation;
use AppBundle\Entity\Module;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CoursesController extends Controller
{

    /**
     * @Route("/courses",name="courses")
     */
    public function courseAction(){

        /*
         * getRepository(entité ciblée):SELECT
         *
         * 4 méthodes de sélection
         *      find(id) : récupérer un enregistrement par le PK
         *      findAll() : récupérer tous les enregistrements
         *      finBy() : récupérer plusieurs enregistrements par une liste de cristères
         * (par la valeur d'une colonne de la table)
         *
         *      finByOne() : récupérer un enregistrement par une liste de cristères
         * */
        $doctrine = $this->getDoctrine();
        $repository = $doctrine->getRepository(Formation::class);
        $results = $repository->findAll();
        // exit(dump($results));

        return $this->render('course/course.html.twig', [
            'results'=>$results
        ]);
    }

    /**
     * @Route("/course/{id}", name="course.id", defaults={"id" = null})
     */
    public function formAction($id)
    {
        // doctrine
        $doctrine = $this->getDoctrine();

        $doctrine = $this->getDoctrine();
        $repository = $doctrine->getRepository(Formation::class);
        $results = $repository->find($id);

        return $this->render('course/courseId.html.twig', [
            'results'=>$results
        ]);
    }
}