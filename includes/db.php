<?php

ob_start();

/*
 * ===========
 * DB Connect
 * ===========
 */

$db["db_host"] = "localhost";
$db["db_user"] = "root";
$db["db_pass"] = "91221";
$db["db_name"] = "essay_competition";

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$utf_query = "SET NAMES utf8";

mysqli_query($connect, $utf_query);

if (!$connect) {
    die("Connection Filed: " . $connect->connect_error);
}