<?php

$cookie_name = "user";
$cookie_value = "John Doe";

$cookie_expiry = time() + (86400 * 1); 

setcookie($cookie_name, $cookie_value, $cookie_expiry, "/"); 


if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie name '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie named '" . $cookie_name . "' is not set!";
}
?>
