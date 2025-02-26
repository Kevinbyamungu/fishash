<?php

use App\Controllers\AuthControllers;
use App\Controllers\PublicControllers;

$app->get('/connexion', [AuthControllers::class , 'connexion']);

$app->get('/', [PublicControllers::class , 'home']);

$app->get('{route:.*}', [AuthControllers::class , 'notfound']);