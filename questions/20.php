<?php
$cookie_value = 20;
setcookie('20',$cookie_value, time() + 3600, '/');
header("Location: /");
?>