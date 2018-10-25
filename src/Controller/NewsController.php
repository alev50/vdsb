<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class NewsController {
    
    /**
     * @Route("/news/{id}", name="app_news")
     */
    public function index($id) {
        return new JsonResponse(array('title' => 'Hello world !', 'details' => 'Ceci est un test.'));
    }

}