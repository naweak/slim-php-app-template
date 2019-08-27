<?php
require_once "./vendor/autoload.php";
require_once "./src/helpers.php";

use RedBeanPHP\R as R;
use Symfony\Component\Dotenv\Dotenv;
use \Slim\App;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

$mysql = [
    'host' => env('MYSQL_HOST', '127.0.0.1'),
    'user' => env('MYSQL_USER'),
    'password' => env('MYSQL_PASSWORD'),
    'database' => env('MYSQL_DATABASE')
];

R::setup( "mysql:host={$mysql['host']};dbname={$mysql['database']}",
     $mysql['user'], $mysql['password']);

$app = new App();

$app->group('/api', function (App $app) {
    $app->get('[/]', 'Controllers\ApiDefault:test');
});

$app->run();
