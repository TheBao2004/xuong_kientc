<?php

session_start();

use App\Controllers\CategoryController;
use App\Controllers\OtherController;
use App\Controllers\ProductController;
use App\Router;

require_once __DIR__ . "/env.php";

require_once __DIR__ . "/config.php";

require_once __DIR__ . "/vendor/autoload.php";

$router = new Router();


$router->get("/categories", [CategoryController::class, "index"]);
$router->get("/categories/create", [CategoryController::class, "create"]);
$router->post("/categories/create", [CategoryController::class, "store"]);
$router->get("/categories/edit", [CategoryController::class, "edit"]);
$router->post("/categories/edit", [CategoryController::class, "update"]);
$router->get("/categories/delete", [CategoryController::class, "delete"]);

$router->get("/products", [ProductController::class, "index"]);
$router->get("/products/create", [ProductController::class, "create"]);
$router->post("/products/create", [ProductController::class, "store"]);
$router->get("/products/edit", [ProductController::class, "edit"]);
$router->post("/products/edit", [ProductController::class, "update"]);
$router->get("/products/delete", [ProductController::class, "delete"]);


$router->get("/", [OtherController::class, "store"]);
$router->get("/login", [OtherController::class, "login"]);
$router->post("/login", [OtherController::class, "handle"]);
$router->get("/logout", [OtherController::class, "logout"]);
$router->get("/dangxuat", [OtherController::class, "dangxuat"]);


$router->resolve();
