<?php
$cookie_value = 21;
setcookie('21',$cookie_value, time() + 3600, '/');
header("Location: /");
?>