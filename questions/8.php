<?php
$cookie_value = 8;
setcookie('8',$cookie_value, time() + 3600, '/');
header("Location: /");
?>