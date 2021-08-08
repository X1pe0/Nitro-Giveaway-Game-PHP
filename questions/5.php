<?php
$cookie_value = 5;
setcookie('5',$cookie_value, time() + 3600, '/');
header("Location: /");
?>