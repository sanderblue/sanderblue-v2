<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DeveloperController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('developer/index.html.twig', []);
    }

    public function experienceAction(Request $request)
    {
        return $this->render('developer/experience.html.twig', []);
    }
}
