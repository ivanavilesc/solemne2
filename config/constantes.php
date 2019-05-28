<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
define("URLBASE",'http://localhost:8081');
define("DIRBASE",'A:/AvilesIvan');

$host  = $_SERVER['HTTP_HOST'];
$host_upper = strtoupper($host);
$path   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$baseurl = "http://" . $host . $path . "/";

/*
 * Parametros DB
 * **/
define("DBNAME",'leyes');
define("DBUSR",'root');
define("DBPWD",'');
define("DBHOST",'localhost');
