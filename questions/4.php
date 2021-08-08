<?php
$cookie_value = 4;
setcookie('4',$cookie_value, time() + 3600, '/');
header("Location: /");
?>