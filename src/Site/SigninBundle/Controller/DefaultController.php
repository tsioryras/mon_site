<?php

namespace Site\SigninBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteSigninBundle:Default:index.html.twig');
    }
}
