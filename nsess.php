<?php
if(isset($_POST['text']) && !empty($_POST['text'])){
$cookie_value=$_POST['text'];
setcookie('username',$cookie_value, time() + 3600, '/');
}

?>





<title>Nitro Scavenger Hunt</title>
<body style="background-color:black;">

<center>
  <img src="unnamed.png">
</br>
<html>

<style>
.myButton {
	box-shadow:inset 0px 0px 0px 0px #bbdaf7;
	background:linear-gradient(to bottom, #212F3C 5%, #212F3C 100%);
	background-color:#ABEBC6;
	border-radius:5px;
	border:1px solid #1B2631;
	display:inline-block;
	cursor:pointer;
	color:#ABEBC6;
	font-family:Arial;
	font-size:13px;
	font-weight:bold;
	height: 120px;
	width: 120px;
	padding:1px 1px;
	text-align: center;
	text-decoration:none;
	text-shadow:0px 1px 0px #528ecc;
}
.myButton:hover {
	background:linear-gradient(to bottom, #58D68D 5%, #58D68D 100%);
	background-color:#378de5;
}
.myButton:active {
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
    <h2 style='color:white'>About The Game</h2>
    <p style='color:white'>Oof! Looks like USERNAME forgot the code to the lock, can you help him re-find the code?</p>
    <p style='color:white'>The code is only 3 numbers. If you type the wrong code, don't worry. You can try over and over agian.
    <p style='color:white'>The game is real time and can end any second when a user gets access. Good luck!</p>

</br></br>
<body>
<center>
<?php
if(isset($cookie_value)&& !empty($cookie_value)) {
    
    $my_file = './users/'.$cookie_value;
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
    header("Location: /");
} else {
    echo "<h3 style='color:white'>Please enter your discord name.</h3>";
}
?>
<form action=<?php echo $_SERVER['PHP_SELF'] ?> method='post'>
<input pattern="{3}" type='text' name='text'>
<input type='submit' value='Submit'>
</form>

</body>
</html>