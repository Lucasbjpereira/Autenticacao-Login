<?php

/** 
 * SITE CONFIG
 */
define("SITE", [
    "name" => "Auth em MVC com PHP",
    "desc" => "Aplicação de autenticação em MVC com PHP",
    "domain" => "localauth.com",
    "locale" => "pt-BR",
    "root" => "http://localhost/AuthLogin"
]);

/** 
 * SITE MINIFY
 */
if ($_SERVER['SERVER_NAME'] == "localhost") {
    require __DIR__ . "/Minify.php";
}

/** 
 * DATABASE CONNECT
 */
define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "auth",
    "username" => "root",
    "passwd" => "",
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
    "facebook_page" => "",
    "facebook_author" => "",
    "facebook_appId" => "",
    "twitter_creator" => "",
    "twitter_site" => ""
]);

/** 
 * MAIL CONNECT
 */
define("MAIL", []);

/** 
 * SOCIAL LOGIN: FACEBOOK
 */
define("FACEBOOK_LOGIN", []);

/** 
 * SOCIAL LOGIN: GOOGLE
 */
define("GOOGLE_LOGIN", []);
