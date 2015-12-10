<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('index/index.html.twig', []);
    }

    /**
     * @Route("/developer", name="developer")
     */
    public function developerAction(Request $request)
    {
        return $this->render('index/index.html.twig', []);
    }
}
