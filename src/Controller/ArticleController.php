<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
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
        $comments = [
            'bla',
            'bla',
            'bla',
        ];

        return $this->render('article/show.html.twig', [
            'title' => ucfirst(str_replace('-', ' ', $slug)),
            'comments' => $comments
        ]);
    }
}