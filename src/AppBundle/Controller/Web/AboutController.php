<?php

namespace AppBundle\Controller\Web;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AboutController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('about/index.html.twig', []);
    }

    public function experienceAction(Request $request)
    {
        return $this->render('about/experience.html.twig', []);
    }
}
