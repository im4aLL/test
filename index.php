<?php
/**
 * Application is based on Fat-Free Framework
 * @version 3.6
 * 
 * @author Habib Hadi <me@habibhadi.com>
 * 
 * Configuration and autoload
 */
require __DIR__.'/vendor/autoload.php';
require __DIR__.'/config.php';

/**
 * Base instance
 */
$f3 = \Base::instance();

/**
 * Routing
 */
$f3->route('GET /', '\App\Controller\TaskController->index');
$f3->route('GET /tasks', '\App\Controller\TaskController->index');
$f3->route('GET /tasks/create', '\App\Controller\TaskController->create');
$f3->route('POST /tasks', '\App\Controller\TaskController->store');
$f3->route('GET /tasks/@task', '\App\Controller\TaskController->show');
$f3->route('GET /tasks/@task/edit', '\App\Controller\TaskController->edit');

/**
 * Global variable
 */
$f3->set('config.database', $config['database']);

/**
 * Bootstrap
 */
$f3->run();