<?php
ob_start();
session_start();

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(site());
$router->namespace("Source\Controllers");

/**
 * WEB
 */
$router->group(null);
$router->get("/","Web:login","web.login");
$router->get("/cadastrar","Web:register","web.register");
$router->get("/recuperar","Web:forget","web.forget");
$router->get("/senha/{email}/{forget}","Web:reset","web.reset");

/*
 * AUTH
 */
$router->group(null);
$router->post("/login","Auth:login","auth.login");
$router->post("/register","Auth:register","auth.register");
$router->post("/registertea","Auth:registertea","auth.registertea");
$router->post("/forget","Auth:forget","auth.forget");
$router->post("/reset","Auth:reset","auth.reset");
$router->post("/classroom","Auth:classroom","auth.classroom");
$router->post("/lesson","Auth:lesson","auth.lesson");
/*$router->post("/event","Auth:event","auth.event");*/

/*
 * AUTH SOCIAL
$router->group(null);
$router->get("/facebook", "Auth:facebook", "auth.facebook");
$router->get("/google", "Auth:google", "auth.google");
 */

/*
 * APP
 */
$router->group("/me");
$router->get("/estudante","App:student","app.student");
$router->get("/professor","App:teacher","app.teacher");
$router->get("/administrador","App:admin","app.admin");
$router->get("/curso","App:classstd","app.classstd");
$router->get("/aulas","App:classtea","app.classtea");
/*$router->get("/calendario","App:calendar","app.calendar");*/
$router->get("/perfil","App:profilestd","app.profilestd");
$router->get("/perfil","App:profiletea","app.profiletea");
$router->get("/sair","App:logoff","app.logoff");

/*
 * ERRORS
 */
$router->group("ops");
$router->get("/{errcode}","Web:error","web.error");

/*
 * ROUTE PROCESS
 */
$router->dispatch();

/*
 * ERRORS PROCESS
 */
if($router->error()){
    $router->redirect("web.error",["errcode" => $router->error()]);
}

ob_end_flush();