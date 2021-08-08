<?php
$cookie_value = 1;
setcookie('1',$cookie_value, time() + 3600, '/');
header("Location: /");
?>
