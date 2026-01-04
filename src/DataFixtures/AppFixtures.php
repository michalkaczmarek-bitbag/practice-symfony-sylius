<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Factory\ArticleFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
//        ArticleFactory::createOne([
//            'title' => 'test1',
//            'content' => 'Lorem test1',
//            'published' => new \DateTimeImmutable(),
//            'isCompleted' => false,
//        ]);
//
//        ArticleFactory::createOne([
//            'title' => 'test2',
//            'content' => 'Lorem test2',
//            'published' => new \DateTimeImmutable(),
//            'isCompleted' => true,
//        ]);
//
//        ArticleFactory::createOne([
//            'title' => 'test3',
//            'content' => 'Lorem test3',
//            'published' => new \DateTimeImmutable(),
//            'isCompleted' => false,
//        ]);
//
//        ArticleFactory::createOne([
//            'title' => 'test4',
//            'content' => 'Lorem test4',
//            'published' => new \DateTimeImmutable(),
//            'isCompleted' => true,
//        ]);

        ArticleFactory::createMany(20);
//        $article = new Article();
//        $article->setTitle('test1');
//        $article->setContent('Lorem test1');
//        $article->setPublished(new \DateTimeImmutable());
//        $article->setIsCompleted(false);
//
//        $article2 = new Article();
//        $article2->setTitle('test2');
//        $article2->setContent('Lorem test2');
//        $article2->setPublished(new \DateTimeImmutable());
//        $article2->setIsCompleted(true);
//
//        $article3 = new Article();
//        $article3->setTitle('test3');
//        $article3->setContent('Lorem test3');
//        $article3->setPublished(new \DateTimeImmutable());
//        $article3->setIsCompleted(false);
//
//        $manager->persist($article);
//        $manager->persist($article2);
//        $manager->persist($article3);
//
//        $manager->flush();
    }
}
