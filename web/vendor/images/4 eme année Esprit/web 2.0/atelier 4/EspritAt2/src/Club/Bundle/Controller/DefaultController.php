<?php

namespace Club\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //die('fdfdf');
        //add @ and change : by / and delete the word bundle
        return $this->render('@Club/Default/index.html.twig');
    }
}
