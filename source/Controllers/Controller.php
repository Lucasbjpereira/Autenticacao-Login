<?php

namespace Source\Controllers;

use CoffeeCode\Optimizer\Optimizer;
use CoffeeCode\Router\Router;
use League\Plates\Engine;

abstract class Controller
{
    /** @var Engine */
    protected $view;

    /** @var Router */
    protected $router;

    /** @var Optimizer */
    protected $seo;

    public function __construct($router)
    {
        $this->router = $router;
        $this->view = Engine::create(dirname(__DIR__, 2) . "/views", "php");
        $this->view->addData(["router" => $this->router]);

        $this->seo = new Optimizer();
        $this->seo->openGraph(site("name"), site("locale"), "article")
            ->publisher(SOCIAL["facebook_page"], SOCIAL["facebook_author"])
            ->twitterCard(SOCIAL["twitter_creator"], SOCIAL["twitter_site"], site("domain"))
            ->facebook(SOCIAL["facebook_appId"]);
    }
    
    /**
     * ajaxResponse
     *
     * @param  mixed $param
     * @param  mixed $values
     * @return string
     */
    public function ajaxResponse(string $param, array $values): string
    {
        return json_encode([$param => $values]);
    }
}
