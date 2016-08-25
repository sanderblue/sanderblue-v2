<?php

namespace AppBundle\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DataController extends Controller
{
    public function dataAction()
    {
        return new JsonResponse([
            'data' => 'test worked',
        ]);
    }
}
