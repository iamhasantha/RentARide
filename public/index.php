<?php

use app\controllers\AuthController;
use app\controllers\CustomerController;
use app\controllers\SiteController;
use app\core\Application;
use app\models\Customer;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


$config = [
    'customerClass' => Customer::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];


$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [SiteController::class, 'home']);

$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'handleContact']);


$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);

$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);

$app->router->get('/logout', [AuthController::class, 'logout']);


$app->router->get('/home', [CustomerController::class, 'home']);

$app->router->get('/profile', [CustomerController::class, 'profile']);

$app->router->get('/VehicleBooking', [CustomerController::class, 'VehicleBooking']);

$app->router->get('/VehicleInfo', [CustomerController::class, 'vehicleInfo']);

$app->router->get('/VehicleBookingTable', [CustomerController::class, 'vehicleBookingTable']);

$app->run();