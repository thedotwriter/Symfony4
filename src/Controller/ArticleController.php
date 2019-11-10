<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     * @return Response
     */
    public function homepage()
    {
        return $this->render('article/homepage.html.twig');
    }

    /**
     * @Route("/article/{slug}", name="app_article_show")
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
            'slug' => $slug,
            'comments' => $comments,
        ]);
    }

    /**
     * @Route("/article/{slug}/like", name="like_article", methods={"POST"})
     * @param $slug
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function likeArticle($slug)
    {
        return $this->json(['hearts' => rand(5, 100)]);
    }
}