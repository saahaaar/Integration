<?php

namespace PubextBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PubextBundle:Default:index.html.twig');
    }
}
