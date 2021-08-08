<?php
$cookie_value = 14;
setcookie('14',$cookie_value, time() + 3600, '/');
header("Location: /");
?>