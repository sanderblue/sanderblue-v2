<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProjectsController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('projects/index.html.twig', [
            'projects' => [
                [
                    'name' => 'The Solar System in 3D',
                    'description' => "A scaled 3D model of the Solar System, powered by Three.js and WebGL. All objects within this project have been modeled to scale based on real astronomical data. This includes the planets' rotations, orbits, and geometry. The scene currently renders the sun, thousands of stars, the asteriod belt, the planets and their moons.",
                    'github' => 'https://github.com/sanderblue/solar-system-threejs',
                    'bower' => null,
                    'npm' => null,
                    'thumbnail' => 'http://i.space.com/images/i/000/045/777/i02/light-rays-over-paranal-observatory-1600.jpg',
                ],
                [
                    'name' => 'Data Visualizations',
                    'description' => 'A project to explore data visualization utilizing the Chart.js library.',
                    'github' => 'https://github.com/sanderblue/data-visualizations',
                    'bower' => null,
                    'npm' => null,
                    'thumbnail' => 'http://i.space.com/images/i/000/045/777/i02/light-rays-over-paranal-observatory-1600.jpg',
                ],
                [
                    'name' => 'AjaxRequest',
                    'description' => 'Minimalist AJAX request module with zero dependencies.',
                    'github' => 'https://github.com/sanderblue/ajaxrequest',
                    'bower' => null,
                    'npm' => 'https://www.npmjs.com/package/ajaxrequest',
                    'thumbnail' => 'http://i.space.com/images/i/000/045/777/i02/light-rays-over-paranal-observatory-1600.jpg',
                ],
                [
                    'name' => 'Voyager Project',
                    'description' => 'A small project that displays the distances of the Voyager 1 and Voyager 2 spacecrafts from earth. This small project utilizes a couple libraries provided by NASA.',
                    'github' => 'https://github.com/sanderblue/ajaxrequest',
                    'bower' => null,
                    'npm' => null,
                    'thumbnail' => 'http://i.space.com/images/i/000/045/777/i02/light-rays-over-paranal-observatory-1600.jpg',
                ]
            ]
        ]);
    }
}
