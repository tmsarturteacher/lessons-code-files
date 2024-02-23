<?php

if (!isset($_COOKIE["PHPSESSID"])) {
    session_start();
}

$_SESSION['login'] = "Ivan";
$_SESSION['age'] = '30';

$login = $_SESSION['login'];
$age = $_SESSION['age'];

//var_dump($_SESSION);

echo "Hello, {$login}! ";

//var_dump($_COOKIE);



//var_dump($_SESSION);

setcookie("userName", "Ivan", time() + 3600, '/');
setcookie("lang", "en", time() + 3600, '/');

if (isset($_COOKIE["userName"])) {
    $lang = $_COOKIE["lang"];
    $userName = $_COOKIE["userName"];
    if ($lang === "ru") {
        echo "Привет, {$userName}";
    } else {
        echo "Hello, {$userName}";
    }
} else {
    echo "cookie userName is not set";
}

















