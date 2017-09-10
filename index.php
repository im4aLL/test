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
$f3->route('GET             @home: /',                          '\App\Controller\TaskController->index');
$f3->route('GET             @tasks: /tasks',                    '\App\Controller\TaskController->index');
$f3->route('GET             @task.create: /tasks/create',       '\App\Controller\TaskController->create');
$f3->route('POST            @task.store: /tasks',               '\App\Controller\TaskController->store');
$f3->route('GET             @task.show: /tasks/@task',          '\App\Controller\TaskController->show');
$f3->route('GET             @task.edit: /tasks/@task/edit',     '\App\Controller\TaskController->edit');
$f3->route('POST|PUT|PATCH  @task.update: /tasks/@task/edit',   '\App\Controller\TaskController->update');
$f3->route('POST|DELETE     @task.delete: /tasks/@task/delete', '\App\Controller\TaskController->destroy');

/**
 * Global variable
 */
$f3->set('config.database', $config['database']);

/**
 * Bootstrap
 */
$f3->run();