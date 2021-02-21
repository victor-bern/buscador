<?php



ob_start();

require __DIR__ . "/vendor/autoload.php";

$router = new \CoffeeCode\Router\Router(url(), "@");

$router->namespace("Src\App");

$router->get("/", "Web@Home");


$router->dispatch();

ob_flush();

