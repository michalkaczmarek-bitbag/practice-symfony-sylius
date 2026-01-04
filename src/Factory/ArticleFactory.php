<?php

namespace App\Factory;

use App\Entity\Article;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<Article>
 */
final class ArticleFactory extends PersistentProxyObjectFactory
{
    private const ARTICLE_TITLE = [
        'test1',
        'test2',
        'test3',
        'test4',
        'test5',
    ];

    private const ARTICLE_CONTENT = [
        'lorem ipsum 1',
        'lorem ipsum 2',
        'lorem ipsum 3',
        'lorem ipsum 4',
        'lorem ipsum 5',
    ];

    private const ARTICLE_ISCOMPLETED = [
        true,
        false,
        true,
        false,
        true,
    ];

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
    }

    #[\Override]
    public static function class(): string
    {
        return Article::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    #[\Override]
    protected function defaults(): array|callable
    {
        return [
            'content' => self::faker()->randomElement(self::ARTICLE_CONTENT),
            'isCompleted' => self::faker()->randomElement(self::ARTICLE_ISCOMPLETED),
            'title' => self::faker()->randomElement(self::ARTICLE_TITLE),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    #[\Override]
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(Article $article): void {})
        ;
    }
}
