<?php
$cookie_value = 11;
setcookie('11',$cookie_value, time() + 3600, '/');
header("Location: /");
?>