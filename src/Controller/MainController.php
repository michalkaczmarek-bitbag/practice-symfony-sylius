<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController
{
    public function homepage(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findCompleteArticles(false);
//        $articles = $articleRepository->findMyArticle();

        return $this->render('articles/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    public function show(ArticleRepository $articleRepository, string $id): Response
    {
        $article = $articleRepository->find($id);

        return $this->render('articles/show.html.twig', [
            'article' => $article,
        ]);
    }
}
