<?php
$cookie_value = 7;
setcookie('7',$cookie_value, time() + 3600, '/');
header("Location: /");
?>