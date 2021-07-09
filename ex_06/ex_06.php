<?php
function remove_cookie($cookie){
    if (isset($_COOKIE[$cookie])) {
        unset($_COOKIE[$cookie]);
        setcookie($cookie, NULL, times()-3600);
    }
}
?>