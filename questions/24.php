<?php
$cookie_value = 24;
setcookie('24',$cookie_value, time() + 3600, '/');
header("Location: /");
?>