
<?php
$path_to_your_file = "whowon";
clearstatcache();
if(filesize($path_to_your_file)) {
    header("Location: /w.php");
}
?>
<html>
<title>Nitro Scavenger Hunt</title>
<link rel="shortcut icon" href="favicon.ico">
<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
<center>
  <img src="unnamed.png">
<?php
if(htmlspecialchars(isset($_COOKIE["username"]))){
    echo "";
} else{
    header("Location: /nsess.php");
}
?>
<style>

.myButtonC {
  line-height: 100px;
	box-shadow:inset 0px 0px 0px 2px #32FFDB;
  background:linear-gradient(to bottom, #c26565 5%, #c26565 100%);
  background-color:#c26565;
  border-radius:40px;
  display:inline-block;
  cursor:pointer;
  color:#c26565;
  font-family:Arial;
  font-size:20px;
  font-weight:bold;
  height: 120px;
  width: 120px;
  text-align: center;
  text-decoration:none;
}
.myButtonC:hover {
  background:linear-gradient(to bottom, #c26565 5%, #c26565 100%);
  background-color:#378de5;
}
.myButtonC:active {
  position:relative;
  top:1px;
}
.myButton {
  text-align: center; 
  line-height: 100px;
  padding: 0px;
	box-shadow:inset 0px 0px 0px 2px #32FFDB;
	background:linear-gradient(to bottom, #212F3C 5%, #212F3C 100%);
	background-color:#ABEBC6;
  border-radius:40px;
	display:inline-block;
	cursor:pointer;
	color:#ABEBC6;
	font-family:Arial;
	font-size:20px;
	font-weight:bold;
	height: 120px;
	width: 120px;

	text-decoration:none;
	text-shadow:0px 0px 0px #528ecc;
}
.myButton:hover {
	background:linear-gradient(to bottom, #58D68D 5%, #58D68D 100%);
	background-color:#378de5;
}
.myButton:active {
	position:relative;
	top:1px;
}
.myButton2 {
  text-align: center; 
  line-height: 100px;
  padding: 0px;
	box-shadow:inset 0px 0px 0px 2px #32FFDB;
	background:linear-gradient(to bottom, #212F3C 5%, #212F3C 100%);
	background-color:#ABEBC6;
  border-radius:40px;
	display:inline-block;
	cursor:pointer;
	color:#ABEBC6;
	font-family:Arial;
	font-size:20px;
	font-weight:bold;
	height: 120px;
	width: 120px;

	text-decoration:none;
	text-shadow:0px 0px 0px #528ecc;
}
.myButton2:hover {
	background:linear-gradient(to bottom, #58D68D 5%, #58D68D 100%);
	background-color:#378de5;
}
.myButton2:active {
	position:relative;
	top:1px;
}

    .center {
      
      margin: 0 auto;
      
    }

    .awesome {
      
      font-family: Arial;
      font-style: normal;
      
      width:100%;
      
      margin: 0 auto;
      text-align: center;
      
      color:#313131;
      font-size:45px;
      font-weight: bold;
      position: absolute;
     
      
      
    }

    @-webkit-keyframes colorchange {
      0% {
        
        color: blue;
      }
      
      10% {
        
        color: #8e44ad;
      }
      
      20% {
        
        color: #1abc9c;
      }
      
      30% {
        
        color: #d35400;
      }
      
      40% {
        
        color: blue;
      }
      
      50% {
        
        color: #34495e;
      }
      
      60% {
        
        color: blue;
      }
      
      70% {
        
        color: #2980b9;
      }
      80% {
     
        color: #f1c40f;
      }
      
      90% {
     
        color: #2980b9;
      }
      
      100% {
        
        color: pink;
      }
    }
    </style>
    </br></br>

    <center>

<?php
if(isset($_COOKIE["1"])){
    echo "<a href='' class='myButtonC'>CHECKED!</a>";
} else{
    echo "<a href='/questions/1.php' class='myButton'>1</a>";
}
?>
<?php
if(isset($_COOKIE["2"])){
    echo "<a href='' class='myButtonC'>CHECKED!</a>";
} else{
    echo "<a href='/questions/2.php' class='myButton'>2</a>";
}
?>
<?php
if(isset($_COOKIE["3"])){
    echo "<a href='' class='myButtonC'>CHECKED!</a>";
} else{
    echo "<a href='/questions/3.php' class='myButton'>3</a>";
}
?>
<br>
<?php
if(isset($_COOKIE["4"])){
    echo "<a href='' class='myButtonC'>CHECKED!</a>";
} else{
    echo "<a href='/questions/4.php' class='myButton'>4</a>";
}
?>
<?php
if(isset($_COOKIE["5"])){
    echo "<a href='' class='myButtonC'>CHECKED!</a>";
} else{
    echo "<a href='/questions/5.php' class='myButton'>5</a>";
}
?>
<?php
if(isset($_COOKIE["6"])){
    echo "<a href='' class='myButtonC'>CHECKED!</a>";
} else{
    echo "<a href='/questions/6.php' class='myButton'>6</a>";
}
?>
<br>
<?php
if(isset($_COOKIE["7"])){
    echo "<a href='' class='myButtonC'>CHECKED!</a>";
} else{
    echo "<a href='/questions/7.php' class='myButton'>7</a>";
}
?>
<?php
if(isset($_COOKIE["8"])){
    echo "<a href='' class='myButtonC'>CHECKED!</a>";
} else{
    echo "<a href='/questions/8.php' class='myButton'>8</a>";
}
?>
<?php
if(isset($_COOKIE["9"])){
    echo "<a href='' class='myButtonC'>CHECKED!</a>";
} else{
    echo "<a href='/questions/9.php' class='myButton'>9</a>";
}
?>
<br>

</br>
</br>

</center>


<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["3"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["2"]) and isset($_COOKIE["3"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["4"]) and isset($_COOKIE["4"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /core.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["7"]) and isset($_COOKIE["8"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["4"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["6"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["2"]) and isset($_COOKIE["4"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["2"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["2"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["2"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["2"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["2"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["3"]) and isset($_COOKIE["4"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["3"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["3"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["3"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["3"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["3"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["4"]) and isset($_COOKIE["2"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["4"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["4"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["4"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["4"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["4"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["5"]) and isset($_COOKIE["2"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["5"]) and isset($_COOKIE["3"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["5"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["5"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["5"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["5"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["6"]) and isset($_COOKIE["2"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["6"]) and isset($_COOKIE["4"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["6"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["6"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["6"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["6"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["7"]) and isset($_COOKIE["2"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["7"]) and isset($_COOKIE["3"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["7"]) and isset($_COOKIE["4"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["7"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["7"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["7"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["7"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["8"]) and isset($_COOKIE["2"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["8"]) and isset($_COOKIE["3"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["8"]) and isset($_COOKIE["4"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["8"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["8"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["8"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["8"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["9"]) and isset($_COOKIE["2"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["9"]) and isset($_COOKIE["3"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["9"]) and isset($_COOKIE["4"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["9"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["9"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["9"]) and isset($_COOKIE[""])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["1"]) and isset($_COOKIE["9"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["3"]) and isset($_COOKIE["4"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["3"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["3"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["3"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["3"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["3"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["4"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["4"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["4"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["4"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["4"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["5"]) and isset($_COOKIE["3"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["5"]) and isset($_COOKIE["4"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["5"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["5"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["5"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["5"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["6"]) and isset($_COOKIE["3"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["6"]) and isset($_COOKIE["4"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["6"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["6"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["6"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["6"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["7"]) and isset($_COOKIE["3"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["7"]) and isset($_COOKIE["4"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["7"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["7"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["7"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["7"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["8"]) and isset($_COOKIE["3"])){
$myfile = fopen("whowon", "w") or die("Database Down. oof!");
$txt = $_COOKIE["username"];
fwrite($myfile, $txt);
fclose($myfile);
$myfile2 = fopen("./users/".$txt, "w") or die("Unable to open file!");
$txt2 = $myfile2 + 1;
fwrite($myfile2, $txt2);
fclose($myfile2);
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["8"]) and isset($_COOKIE["4"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["8"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["8"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["8"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["8"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["9"]) and isset($_COOKIE["3"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["9"]) and isset($_COOKIE["4"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["9"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["9"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["9"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["2"]) and isset($_COOKIE["9"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["4"]) and isset($_COOKIE["4"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /core.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["4"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["4"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["4"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["4"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["4"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["5"]) and isset($_COOKIE["4"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["5"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["5"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["5"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["5"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["6"]) and isset($_COOKIE["4"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["6"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["6"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["6"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["6"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["7"]) and isset($_COOKIE["4"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["7"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["7"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["7"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["7"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["8"]) and isset($_COOKIE["4"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["8"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["8"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["8"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["8"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["9"]) and isset($_COOKIE["4"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["9"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["9"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["9"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["3"]) and isset($_COOKIE["9"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["4"]) and isset($_COOKIE["5"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["4"]) and isset($_COOKIE["5"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["4"]) and isset($_COOKIE["5"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["4"]) and isset($_COOKIE["5"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["4"]) and isset($_COOKIE["6"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["4"]) and isset($_COOKIE["6"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["4"]) and isset($_COOKIE["6"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["4"]) and isset($_COOKIE["6"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["4"]) and isset($_COOKIE["7"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["4"]) and isset($_COOKIE["7"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["4"]) and isset($_COOKIE["7"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["4"]) and isset($_COOKIE["7"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["4"]) and isset($_COOKIE["8"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["4"]) and isset($_COOKIE["8"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["4"]) and isset($_COOKIE["8"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["4"]) and isset($_COOKIE["8"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["4"]) and isset($_COOKIE["9"]) and isset($_COOKIE["5"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["4"]) and isset($_COOKIE["9"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["4"]) and isset($_COOKIE["9"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["4"]) and isset($_COOKIE["9"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["5"]) and isset($_COOKIE["6"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["5"]) and isset($_COOKIE["6"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["5"]) and isset($_COOKIE["6"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["5"]) and isset($_COOKIE["7"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["5"]) and isset($_COOKIE["7"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["5"]) and isset($_COOKIE["7"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["5"]) and isset($_COOKIE["8"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["5"]) and isset($_COOKIE["8"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["5"]) and isset($_COOKIE["8"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["5"]) and isset($_COOKIE["9"]) and isset($_COOKIE["6"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["5"]) and isset($_COOKIE["9"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["5"]) and isset($_COOKIE["9"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["6"]) and isset($_COOKIE["7"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["6"]) and isset($_COOKIE["7"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["6"]) and isset($_COOKIE["8"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["6"]) and isset($_COOKIE["8"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["6"]) and isset($_COOKIE["9"]) and isset($_COOKIE["7"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["6"]) and isset($_COOKIE["9"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["7"]) and isset($_COOKIE["8"]) and isset($_COOKIE["9"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
if(isset($_COOKIE["6"]) and isset($_COOKIE["7"]) and isset($_COOKIE["8"])){
$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        if ($name == "username"){
          #skip
        }else{
          setcookie($name, '', time()-1000);
          setcookie($name, '', time()-1000, '/');
          header("Location: /error.php");

        }
        
    }
}
?>
<?php
$path_to_your_file = "whowon";
clearstatcache();
if(filesize($path_to_your_file)) {
    header("Location: /w.php");
}
?>
<style>
#page-container {
  position: relative;
  min-height: 100vh;
}

#content-wrap {
  padding-bottom: 2.5rem;    /* Footer height */
}

#footer {
  position: absolute;
  bottom: 0;
  width: 99%;
  height: 2.5rem;            /* Footer height */
}
body {
  overflow-y: hidden; /* Hide vertical scrollbar */
  overflow-x: hidden; /* Hide horizontal scrollbar */
}
</style>

<center>
<?php
function microtime_float() {
  list($usec, $sec) = explode(" ", microtime());
  return ((float)$usec + (float)$sec);
}

$start = microtime_float();
$fp = fsockopen('www.google.com', 80, $errno, $errstr, 30);
$end = microtime_float();
$ms = ($end - $start) * 1000;

echo sprintf('Ping: %sms', $ms);
?>
</body>
<footer id="footer"><font font-family="Arial" size=1 color=purple><a href="https://bitnix.co">Powered By Tunnely, a BitNix LLC Company.</a></footer>
