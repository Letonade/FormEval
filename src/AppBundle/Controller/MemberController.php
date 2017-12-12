<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MemberController extends Controller
{

    private $list = [
        ['name' => 'Romain','fname' => 'Dahlem', 'img' => 'membre1.png'],
        ['name' => 'Oriane','fname' => 'Lohezic', 'img' => 'membre1.png'],
        ['name' => 'Rémy','fname' => 'Petit', 'img' => 'membre1.png']
    ];

    /**
     * @Route("/members/",
     *     name="members",
     * )
     */
    public function MembersAction(Request $request) {
        return $this->render('memberView/members.html.twig',['list' => $this->list]);
    }

    /**
     * @Route("/member/{id}",
     *     name="member",
     * )11
     */
    public function MemberAction(Request $request, $id) {
        return $this->render('memberView/member.html.twig',[
            'detail' => $this->list[$id]
        ]);

    }
}