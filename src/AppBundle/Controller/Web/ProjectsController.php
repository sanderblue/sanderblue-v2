<?php

namespace AppBundle\Controller\Web;

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
                    'description' => "A scaled 3D model of the Solar System, powered by Three.js and WebGL modeled to scale based on real astronomical data.",
                    'demo' => 'http://sanderblue.github.io/solar-system-threejs/',
                    'github' => 'https://github.com/sanderblue/solar-system-threejs',
                    'bower' => null,
                    'npm' => null,
                    'thumbnail' => 'assets/img/projects/thumbnail-solar-system-threejs.jpg',
                    'tags' => ['ES6', 'Three.js', 'Backbone', 'Gulp', 'WebGL', '3D', 'AMD']
                ],
                [
                    'title' => 'WxVue',
                    'description' => "A weather app built with Vue.js and Wunderground's Developer API.",
                    'demo' => 'http://wxvue.io',
                    'github' => 'https://github.com/sanderblue/wx-vue',
                    'bower' => null,
                    'npm' => null,
                    'thumbnail' => 'assets/img/projects/thumbnail-wxvue.jpg',
                    'tags' => ['ES6', 'Vue.js', 'Chart.js', 'webpack', 'Babel', 'Data Visualization', 'API','Weather']
                ],
                [
                    'title' => 'AjaxRequest',
                    'description' => 'Minimalist AJAX request module with zero dependencies. Written with ES6 and transpiled with Babel for ES5 compliance. The built module is UMD compliant.',
                    'demo' => null,
                    'github' => 'https://github.com/sanderblue/ajaxrequest',
                    'bower' => null,
                    'npm' => 'https://www.npmjs.com/package/ajaxrequest',
                    'thumbnail' => 'assets/img/projects/thumbnail-ajaxrequest.jpg',
                    'tags' => ['ES6', 'Gulp', 'Babel', 'UMD']
                ],
                [
                    'title' => 'GitGraph',
                    'description' => "Utilizes Github's developer API and displays the previous 7 days of commit data on a Morris.js line graph.",
                    'demo' => null,
                    'github' => 'https://github.com/sanderblue/gitGraph',
                    'bower' => null,
                    'npm' => null,
                    'thumbnail' => 'assets/img/projects/thumbnail-gitgraph.jpg',
                    'tags' => ['jQuery', 'API', 'Morris.js', 'Data Visualization']
                ],
            ]
        ]);
    }
}
