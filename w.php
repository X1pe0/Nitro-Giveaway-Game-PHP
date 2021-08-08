<center>
<img src=unnamed.png><br>
<img height='40' width='50' src='https://nabyte.com/imgs/4c35934a4eed3015d5c3c43a5b545897c43d8ce1220-2209510_siguiente-clipart-queen-crown-png-transparent-png.png'>
<?php
$homepage = file_get_contents('whowon');
echo "<h1 style='color:white'>" . htmlspecialchars($homepage) . " Won!!!</h1>";
echo "</br>";
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}
?>
<iframe style="border:none;" src="./users/index.php" height="612" width="290" title="Nitro"></iframe>
