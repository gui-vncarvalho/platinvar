<?php

/**
 * SITE CONFIG
 */
define("SITE", [
   "name" => "Sysday",
   "desc" => "Ensino a Distância do Instituto de Educação e Tecnologia Vale do Ribeira",
   "domain" => "https://www.sysday.invar.org.br",
   "locale" => "pt_BR",
    "root" => "https://www.sysday.invar.org.br"
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
 * HOST SMTP
 */
define("MAIL", [
    "host" => "smtp.uni5.net",
    "port" => "465",
    "user" => "secretariaacademica@invar.org.br",
    "passwd" => "2020@mudar",
    "from_name" => "Secretaria Acadêmica - Invar",
    "from_email" => "secretariaacademica@invar.org.br"
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
