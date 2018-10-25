<?php

namespace App\Controller;

use App\Entity\News;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class NewsController extends AbstractController {
    
    /**
     * @Route("/news/{id}", name="app_news")
     */
    public function index($id, SerializerInterface $serializer) {
        $news = $this->getDoctrine()->getRepository(News::class)->find($id);
        $jsonContent = $serializer->normalize($news);

        return new JsonResponse($jsonContent);
    }

}
