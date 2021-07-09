<?php
session_start();
if (isset($_GET["name"])){
    $cookie = htmlspecialchars($_GET["name"]);
    setcookie("name", $cookie, time() + 3600);
}
if (isset($_COOKIE["name"]))
    echo "Hello" . $_COOKIE["name"];
else
    echo "Hello platypus";
?>