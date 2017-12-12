<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TwigController extends Controller
{
    /**
     * @Route("/twig",name="twig")
     */
    public function indexAction(){
    /*
     * nom du controlleur est repris dans le nom du dossier dans app/Ressources/vieux
     * nom de l'action (méthode reièe à une route) est repris dans le nom de la vue
     * */
        return $this -> render('twig/index.html.twig',[
            'now' => new \DateTime(),
            'list' => [
                'element1',
                'element2',
                'element3',
                'element4',
        ]
        ]);
    }

    /**
     * @Route("/layout",name="layout")
     */
    public function layoutAction(){
        return $this -> render('twig/layout.html.twig');
    }
}