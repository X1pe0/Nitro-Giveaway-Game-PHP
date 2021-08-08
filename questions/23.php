<?php
$cookie_value = 23;
setcookie('23',$cookie_value, time() + 3600, '/');
header("Location: /");
?>