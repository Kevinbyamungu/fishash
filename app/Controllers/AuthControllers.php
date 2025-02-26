<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Container\ContainerInterface;

class AuthControllers {

    public function __construct(ContainerInterface $container) {
        $this->container = $container;
    }

    public function connexion( Request $request, Response $response ): Response {
        $views = $this->container->get('path')->run('auth.connexion');
        $response->getBody()->write($views);
        return $response;
    }

    public function notfound( Request $request, Response $response ): Response {
        $views = $this->container->get('path')->run('404');
        $response->getBody()->write($views);
        return $response;
    }

}