<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Container\ContainerInterface;

class PublicControllers {

    private $container;

    public function __construct(ContainerInterface $container) {
        $this->container = $container;
    }

    public function home( Request $request, Response $response ) {
        $views = $this->container->get('path')->run('public.home');
        $response->getBody()->write($views);
        return $response;
    }

}