<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdventurerController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('adventurer/index.html.twig', []);
    }

    public function photographyAction(Request $request)
    {
        return $this->render('adventurer/photography.html.twig', []);
    }

    public function videographyAction(Request $request)
    {
        return $this->render('adventurer/videography.html.twig', []);
    }
}
