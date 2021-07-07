<?php
$name = NULL;
if (isset($_GET["name"]))
    $name = $_GET["name"];
if ($name != NULL) {
    echo "Hello $name";
}else
    echo "Hello platypus";
?>