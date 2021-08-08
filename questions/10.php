<?php
$cookie_value = 10;
setcookie('10',$cookie_value, time() + 3600, '/');
header("Location: /");
?>