<?php
$cookie_value = 12;
setcookie('12',$cookie_value, time() + 3600, '/');
header("Location: /");
?>