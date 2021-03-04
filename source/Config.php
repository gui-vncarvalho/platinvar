<?php

/**
 * SITE CONFIG
 */
define("SITE", [
   "name" => "Plataforma EaD Invar",
   "desc" => "Ensino a Distância do Instituto de Educação e Tecnologia Vale do Ribeira",
   "domain" => "https://sysday.invar.org.br",
   "locale" => "pt_BR",
    "root" => "https://sysday.invar.org.br"
]);

/**
 * SITE MINIFY
 */
if($_SERVER["SERVER_NAME"] == "localhost") {
    require __DIR__ . "/Minify.php";
}

/*
 * DATABASE CONNECT
 */
define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "mysql.invar.org.br",
    "port" => "3306",
    "dbname" => "invar02",
    "username" => "invar02",
    "passwd" => "fl250808",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/**
 * SOCIAL CONFIG
 */
define("SOCIAL", [
    "facebook_page" => "guivncarvalho",
    "facebook_author" => "GuihVila",
    "facebook_appId" => "996846757498545",
    "twitter_creator" => "@GuihVila",
    "twitter_site" => "@GuihVila"
]);

/*
 * MAIL CONNECT
 */
define("MAIL", [
    "host" => "smtp-relay.sendinblue.com",
    "port" => "587",
    "user" => "suporte@mtic.com.br",
    "passwd" => "5KTQhSawMOy89Jvd",
    "from_name" => "Guilherme V. N. de Carvalho",
    "from_email" => "suporte@mtic.com.br"
]);

/*
 * SOCIAL LOGIN: FACEBOOK
 */
define("FACEBOOK_LOGIN", [
    "clientId" => "1295533590813184",
    "clientSecret" => "23dfe7e3ff908ed25e25f4ad686fd346",
    "redirectUri" => SITE["root"] . "/facebook",
    "graphApiVersion" => "v8.0"
]);

/*
 * SOCIAL LOGIN: GOOGLE
 */
define("GOOGLE_LOGIN", [
    "clientId" => "420965786443-o3jkrq36gadast3m969gmluco4g0qopm.apps.googleusercontent.com",
    "clientSecret" => "R6ourCDbLPuHQeisFGaU_Ks_",
    "redirectUri" => SITE["root"] . "/google"
]);
