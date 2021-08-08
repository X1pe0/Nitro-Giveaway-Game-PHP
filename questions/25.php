<?php
$cookie_value = 25;
setcookie('25',$cookie_value, time() + 3600, '/');
header("Location: /");
?>