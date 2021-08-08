<?php
$cookie_value = 6;
setcookie('6',$cookie_value, time() + 3600, '/');
header("Location: /");
?>