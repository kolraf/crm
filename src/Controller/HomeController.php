<?php

namespace App\Controller;

use Symfony\Component\DependencyInjection\ContainerInterface;

class HomeController extends BaseController {

    public function setContainer(ContainerInterface $container = null)
    {
        parent::setContainer($container);
    }

    public function indexAction()
    {
        return $this->render('home/index.html.twig', []);
    }
}