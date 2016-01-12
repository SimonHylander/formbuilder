<?php

namespace Shy\FormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ShyFormBundle:Default:index.html.twig', array('name' => $name));
    }
}
