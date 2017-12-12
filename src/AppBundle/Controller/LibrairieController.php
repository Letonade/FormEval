<?php

namespace AppBundle\Controller;

use AppBundle\Entity\category;
use AppBundle\Entity\Formation;
use AppBundle\Entity\livre;
use AppBundle\Entity\Module;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LibrairieController extends Controller
{

    /**
     * @Route("/categories",name="categories")
     */
    public function categoriesAction(){

        $doctrine = $this->getDoctrine();
        $repository = $doctrine->getRepository(category::class);
        $results = $repository->findAll();
        // exit(dump($results));

        return $this->render('librairieEval/librairieCategories.html.twig', [
            'results'=>$results
        ]);
    }

    /**
     * @Route("/category/{id}", name="category.id", defaults={"id" = null})
     */
    public function formAction($id)
    {
        $doctrine = $this->getDoctrine();
        $repository = $doctrine->getRepository(category::class);
        $results = $repository->find($id);

        return $this->render('librairieEval/librairieByCategories.html.twig', [
            'results'=>$results
        ]);
    }

    /**
     * @Route("/livre/{id}", name="livre.id", defaults={"id" = null})
     */
    public function Action($id)
    {
        $doctrine = $this->getDoctrine();
        $repository = $doctrine->getRepository(livre::class);
        $results = $repository->find($id);

        return $this->render('librairieEval/detail.html.twig', [
            'result'=>$results
        ]);
    }
}