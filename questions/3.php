<?php
$cookie_value = 3;
setcookie('3',$cookie_value, time() + 3600, '/');
header("Location: /");
?>