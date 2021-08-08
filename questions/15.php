<?php
$cookie_value = 15;
setcookie('15',$cookie_value, time() + 3600, '/');
header("Location: /");
?>