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
                    'title' => 'The Solar System in 3D',
                    'description' => "A scaled 3D model of the Solar System, powered by Three.js and WebGL. All objects within this project have been modeled to scale based on real astronomical data.",
                    'github' => 'https://github.com/sanderblue/solar-system-threejs',
                    'bower' => null,
                    'npm' => null,
                    'thumbnail' => 'assets/img/projects/thumbnail-solar-system-threejs.jpg',
                ],
                [
                    'title' => 'Data Visualizations',
                    'description' => 'A project to explore data visualization utilizing the Chart.js library.',
                    'github' => 'https://github.com/sanderblue/data-visualizations',
                    'bower' => null,
                    'npm' => null,
                    'thumbnail' => 'assets/img/projects/thumbnail-data-visualizations.jpg',
                ],
                [
                    'title' => 'GitGraph',
                    'description' => "Utilizes Github's developer API and displays the previous 7 days of commit data on a Morris.js line graph.",
                    'github' => 'https://github.com/sanderblue/gitGraph',
                    'bower' => null,
                    'npm' => null,
                    'thumbnail' => 'assets/img/projects/thumbnail-gitgraph.jpg',
                ],
                [
                    'title' => 'AjaxRequest',
                    'description' => 'Minimalist AJAX request module with zero dependencies. Written with ES6 and transpiled with Babel for ES5 compliance. The built module is UMD compliant.',
                    'github' => 'https://github.com/sanderblue/ajaxrequest',
                    'bower' => null,
                    'npm' => 'https://www.npmjs.com/package/ajaxrequest',
                    'thumbnail' => 'assets/img/projects/thumbnail-ajaxrequest.jpg',
                ],
            ]
        ]);
    }
}
