<?php
$cookie_value = 22;
setcookie('22',$cookie_value, time() + 3600, '/');
header("Location: /");
?>