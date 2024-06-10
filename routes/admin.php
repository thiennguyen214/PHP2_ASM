<?php

use Hey\Pro\Controllers\Admin\BrandController;
use Hey\Pro\Controllers\Admin\DashboardController;
use Hey\Pro\Controllers\Admin\OriginController;
use Hey\Pro\Controllers\Admin\PostController;
use Hey\Pro\Controllers\Admin\ProductController;
use Hey\Pro\Controllers\Admin\TypeController;
use Hey\Pro\Controllers\Admin\UserController;

$router->before('GET|POST', '/admin/*.*', function () {
    if (!isset($_SESSION['user'])) {
        header('location: ' . url('login'));
        exit();
    }
});

$router->mount('/admin', function () use ($router) {

    $router->get('/', DashboardController::class . '@dashboard');

    // CRUD USER
    $router->mount('/users', function () use ($router) {
        $router->get('/', UserController::class . '@index');
        $router->get('/create', UserController::class . '@create');
        $router->post('/store', UserController::class . '@store');
        $router->get('/{id}/show', UserController::class . '@show');
        $router->get('/{id}/edit', UserController::class . '@edit');
        $router->post('/{id}/update', UserController::class . '@update');
        $router->get('/{id}/delete', UserController::class . '@delete');
    });
    $router->mount('/products', function () use ($router) {
        $router->get('/', ProductController::class . '@index');
        $router->get('/create', ProductController::class . '@create');
        $router->post('/store', ProductController::class . '@store');
        $router->get('/{id}/show', ProductController::class . '@show');
        $router->get('/{id}/edit', ProductController::class . '@edit');
        $router->post('/{id}/update', ProductController::class . '@update');
        $router->get('/{id}/delete', ProductController::class . '@delete');
    });
    $router->mount('/type_pros', function () use ($router) {
        $router->get('/', TypeController::class . '@index');
        $router->get('/create', TypeController::class . '@create');
        $router->post('/store', TypeController::class . '@store');
        $router->get('/{id}/edit', TypeController::class . '@edit');
        $router->post('/{id}/update', TypeController::class . '@update');
        $router->get('/{id}/delete', TypeController::class . '@delete');
    });
    $router->mount('/brands', function () use ($router) {
        $router->get('/', BrandController::class . '@index');
        $router->get('/create', BrandController::class . '@create');
        $router->post('/store', BrandController::class . '@store');
        $router->get('/{id}/edit', BrandController::class . '@edit');
        $router->post('/{id}/update', BrandController::class . '@update');
        $router->get('/{id}/delete', BrandController::class . '@delete');
    });
    $router->mount('/origins', function () use ($router) {
        $router->get('/', OriginController::class . '@index');
        $router->get('/create', OriginController::class . '@create');
        $router->post('/store', OriginController::class . '@store');
        $router->get('/{id}/edit', OriginController::class . '@edit');
        $router->post('/{id}/update', OriginController::class . '@update');
        $router->get('/{id}/delete', OriginController::class . '@delete');
    });
    $router->mount('/posts', function () use ($router) {
        $router->get('/', PostController::class . '@index');
        $router->get('/create', PostController::class . '@create');
        $router->post('/store', PostController::class . '@store');
        $router->get('/{id}/show', PostController::class . '@show');
        $router->get('/{id}/edit', PostController::class . '@edit');
        $router->post('/{id}/update', PostController::class . '@update');
        $router->get('/{id}/delete', PostController::class . '@delete');
    });

});