<?php
$cookie_value = 16;
setcookie('16',$cookie_value, time() + 3600, '/');
header("Location: /");
?>