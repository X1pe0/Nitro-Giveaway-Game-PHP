<?php
$cookie_value = 13;
setcookie('13',$cookie_value, time() + 3600, '/');
header("Location: /");
?>