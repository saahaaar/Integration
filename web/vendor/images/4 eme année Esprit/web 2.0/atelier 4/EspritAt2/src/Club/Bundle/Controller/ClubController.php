<?php

namespace Club\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClubController extends Controller
{
    public function homeAction()
    {

        return $this
            ->render(
                '@Club/Default/index.html.twig');
    }

    public function readAction($name)
    {
        return $this->render('@Club/Club/detail.html.twig', [
            'name' => $name
        ]);
    }


    public function listAction()
    {

        $tab = [['name' => "form147",
            'Titre' => "Formation Symfony 3.4",
            'Descirption' => "formation pratique",
            'date_debut' => "/06/2019",
            'date_fin' => "19/06/2019",
            'nb_participants' => "0",
            ]];

        return $this->render(
            '@Club/Club/list.html.twig', [
            'tab' => $tab
        ]);
    }
    public function testAction()
    {
        //die('gfgfdgd');
        return $this->render('@Club/template/test.html.twig');
    }
    public function twigAction()
    {
        $table=[[
            'firstName'=>'mohamed',
            'lastName' =>'ghribi',
            'class'=>"4infoB",
            'adresse'=>'tunis',
            'cin'=>"123456"
        ]];
        //die('gfgfdgd');
        return $this->render(
            '@Club/club/test.html.twig',
            ['tab'=>$table

        ]);
    }
    public function infoBAction(){
        die('test');
        return $this->render('
        @Club/club/test.html.twig');

    }
}
