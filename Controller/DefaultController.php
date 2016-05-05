<?php

namespace Bean\JobBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BeanJobBundle:Default:index.html.twig', array('name' => $name));
    }
}
