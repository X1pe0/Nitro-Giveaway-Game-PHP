<?php
$cookie_value = 17;
setcookie('17',$cookie_value, time() + 3600, '/');
header("Location: /");
?>