<?php

use App\Controllers\ArticleController;
use App\Controllers\PublicController;
use App\Router;

Router::addRouter('/', [PublicController::class, 'index']);
Router::addRouter('/page1', [PublicController::class, 'page1']);

Router::addRouter('/page2', [PublicController::class, 'page2']);

Router::addRouter('/articles', [ArticleController::class, 'index']);

// Router::addRouter('/', function () {
// 	include 'views/index.php';
// });

// Router::addRouter('/page1', function () {
// 	include 'views/page1.php';
// });

// Router::addRouter('/page2', function () {
// 	include 'views/page2.php';
// });