<?php
session_start();
if (isset($_GET["name"])){
    $cookie["name"] = htmlspecialchars($_GET["name"]);
    setcookie("name", $_COOKIE["name"], time() + 3600);
}
if (isset($_COOKIE["name"]))
    echo "Hello" . $_COOKIE["name"];
else
    echo "Hello platypus";
?>