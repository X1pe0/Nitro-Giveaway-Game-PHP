<?php
$cookie_value = 2;
setcookie('2',$cookie_value, time() + 3600, '/');
header("Location: /");
?>