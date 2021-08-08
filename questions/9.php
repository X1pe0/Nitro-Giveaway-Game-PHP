<?php
$cookie_value = 9;
setcookie('9',$cookie_value, time() + 3600, '/');
header("Location: /");
?>