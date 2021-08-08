<?php
$cookie_value = 19;
setcookie('19',$cookie_value, time() + 3600, '/');
header("Location: /");
?>