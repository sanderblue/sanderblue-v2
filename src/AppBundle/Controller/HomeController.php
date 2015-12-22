<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('home/index.html.twig', [
            'socialProfiles' => [
                [
                    'name' => 'github',
                    'url' => 'https://github.com/sanderblue',
                ],
                [
                    'name' => 'twitter',
                    'url' => 'https://twitter.com/SanderBlue',
                ],
                [
                    'name' => 'linkedin',
                    'url' => 'https://www.linkedin.com/in/sanderblue',
                ],
            ],
        ]);
    }

    public function hireAction(Request $request)
    {
        return $this->render('home/about.html.twig', []);
    }
}
