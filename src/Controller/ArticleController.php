<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function homepage()
    {
        return new Response('Test s');
    }

    /**
     * @Route("/article/{slug}")
     * @param $slug
     * @return Response
     */
    public function show($slug)
    {
        return new Response('Article slug:' . $slug);
    }
}