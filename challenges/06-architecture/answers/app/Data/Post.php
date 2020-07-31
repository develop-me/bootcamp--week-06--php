<?php

namespace App\Data;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Post
{
    private static $twig;

    public static function setup()
    {
        if (!static::$twig) {
            $loader = new FilesystemLoader(__DIR__ . "/templates/");
            static::$twig = new Environment($loader, [
                "cache" => __DIR__ . "/cache/",
            ]);
        }
    }

    private $title;
    private $article;

    public function __construct($title)
    {
        static::setup();
        $this->title = $title;
    }

    public function setArticle($article)
    {
        $this->article = $article;
        return $this;
    }

    public function render()
    {
        return static::$twig->render("template.html", [
            "title" => $this->title,
            "article" => $this->article,
        ]);
    }
}
