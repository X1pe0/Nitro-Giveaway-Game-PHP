<html>
<title>Nitro Giveaway</title>
<center>
<h3 style='color:white'>Participants</h3>
</center>
<?php
$blacklist = array('index.php');
echo "<p style='color:white'>";
$files = glob('*'); 
foreach ($files as $file) {
    if (!in_array(basename($file), $blacklist)) {
		echo " ";
		echo htmlspecialchars($file);
		echo " ";
		echo "</br>";
		
}
}


?>