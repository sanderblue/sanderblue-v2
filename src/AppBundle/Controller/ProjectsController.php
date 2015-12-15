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
                    'thumbnail' => 'assets/img/projects/thumbnail-solar-system-threejs.jpg',
                ],
                [
                    'name' => 'Data Visualizations',
                    'description' => 'A project to explore data visualization utilizing the Chart.js library.',
                    'github' => 'https://github.com/sanderblue/data-visualizations',
                    'bower' => null,
                    'npm' => null,
                    'thumbnail' => 'assets/img/projects/thumbnail-data-visualizations.jpg',
                ],
                [
                    'name' => 'GitGraph',
                    'description' => 'Displays the previous 7 days of commit data on a Morris.js line graph.',
                    'github' => 'https://github.com/sanderblue/gitGraph',
                    'bower' => null,
                    'npm' => null,
                    'thumbnail' => 'assets/img/projects/thumbnail-gitgraph.jpg',
                ],
                [
                    'name' => 'AjaxRequest',
                    'description' => 'Minimalist AJAX request module with zero dependencies.',
                    'github' => 'https://github.com/sanderblue/ajaxrequest',
                    'bower' => null,
                    'npm' => 'https://www.npmjs.com/package/ajaxrequest',
                    'thumbnail' => 'assets/img/projects/thumbnail-ajaxrequest.jpg',
                ],
            ]
        ]);
    }
}
