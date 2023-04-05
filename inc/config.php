<?php
// nome do banco de dados

define("DB_NAME", "projeto");

// usuario do banco de dados

define("DB_USER", "root");

// senha do banco de dados

define("DB_PASSWORD", "");

// nome do host do banco de dados

define("DB_HOST", "localhost");

// caminho para a pasta do sistema

if ( !defined( "ABSPATH"))                      // "defined" é para confirmar se criou a variavel
    define("ABSPATH", dirname(__FILE__). "/");   // "define" é para definir variavel

// caminho da pasta no servidor

if ( !defined("BASEURL"))
    define("BASEURL" , "/projeto/");

// caminho para o arquivo de banco de dados

if (!defined("DBAPI"))
    define("DBAPI", ABSPATH . "banco.php");


?>
