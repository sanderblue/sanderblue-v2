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
        $baseUrl = realpath($this->container->getParameter('kernel.root_dir').'/..');

        // replace this example code with whatever you need
        return $this->render('index/index.html.twig', [
            'baseUrl' => $baseUrl,
            'menuItems' => [
                [
                    'name' => 'developer',
                ],
                [
                    'name' => 'thinker',
                ],
                [
                    'name' => 'dreamer',
                ]
            ],
        ]);
    }

    /**
     * @Route("/home", name="homepagetest")
     */
    public function homeAction(Request $request)
    {
        $baseUrl = realpath($this->container->getParameter('kernel.root_dir').'/..');

        // replace this example code with whatever you need
        return $this->render('index/index.html.twig', [
            'baseUrl' => $baseUrl,
            'menuItems' => [
                [
                    'name' => 'developer',
                ],
                [
                    'name' => 'thinker',
                ],
                [
                    'name' => 'dreamer',
                ]
            ],
        ]);
    }
}
