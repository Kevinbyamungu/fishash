<?php 

use DI\Container;
use Slim\Factory\AppFactory;
use eftec\bladeone\BladeOne;

require './../vendor/autoload.php';

$container = new Container();
$container->set('path', function(){
    $viewsPath = './../templates';
    $cachePath = './../storage/cache';
    return new BladeOne( $viewsPath, $cachePath, BladeOne::MODE_AUTO );
});

AppFactory::setContainer($container); 
$app = AppFactory::create();
$app->addErrorMiddleware( true,true,true );

require './../routes/web.php';

$app->run();