<?php
function remove_cookie($cookie){
    setcookie ($cookie,NULL,times()-3600);
}
?>