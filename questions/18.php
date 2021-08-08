<?php
$cookie_value = 18;
setcookie('18',$cookie_value, time() + 3600, '/');
header("Location: /");
?>