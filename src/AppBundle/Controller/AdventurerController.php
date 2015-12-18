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
        return $this->render('adventurer/photography.html.twig', [
            'images' => [
                [
                    'title' => '',
                    'description' => '',
                    'url' => 'assets/img/photography/root_arch_16x9_hi_res.jpg'
                ],
                [
                    'title' => '',
                    'description' => '',
                    'url' => 'assets/img/photography/snow_pond_16x9_hi_res.jpg'
                ],
                [
                    'title' => '',
                    'description' => '',
                    'url' => 'assets/img/photography/sunset_costa_rica_16x9_hi_res.jpg'
                ],
                [
                    'title' => '',
                    'description' => '',
                    'url' => 'assets/img/photography/skiing_breckenridge_peak6_16x9_hi_res.jpg'
                ],
                [
                    'title' => '',
                    'description' => '',
                    'url' => 'assets/img/photography/mossy_bridge_16x9_hi_res.jpg'
                ],
                [
                    'title' => '',
                    'description' => '',
                    'url' => 'assets/img/photography/foster_falls_16x9_hi_res.jpg'
                ],
                [
                    'title' => '',
                    'description' => '',
                    'url' => 'assets/img/photography/clouds_16x9_hi_res.jpg'
                ]
            ]
        ]);
    }

    public function videographyAction(Request $request)
    {
        return $this->render('adventurer/videography.html.twig', []);
    }
}
