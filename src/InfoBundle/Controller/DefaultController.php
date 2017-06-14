<?php

namespace InfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InfoBundle:Default:index.html.twig');
    }

    public function contactAction()
    {
        return $this->render('InfoBundle:Default:contact.html.twig');
    }

    public function serviceAction()
    {
        return $this->render('InfoBundle:Default:service.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('InfoBundle:Default:about.html.twig');
    }
}
