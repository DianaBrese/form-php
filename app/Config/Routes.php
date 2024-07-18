<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/home', 'Home::index');
$routes->get('/postDetail', 'PostDetail::index');
$routes->get('createPost', 'CreatePost::index');
$routes->post('post/store', 'CreatePost::store');
$routes->get('/editPost', 'EditPost::index');
$routes->post('post/edit', 'EditPost::edit');
$routes->post('post/delete', 'DeletePost::deleteP');