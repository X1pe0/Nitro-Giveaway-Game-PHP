<title>Nitro Scavenger Hunt</title>
<center>
		<img src=logo.png>
	<body style="background-color:#17202A;">
		</br></br></br></br></br>
<?php
$homepage = file_get_contents('whowon');
echo "<h1 style='color:white'>" . htmlspecialchars($homepage) . " Won!!!</h1>";
?>
</br>
<?php
echo "</br>";
ob_start();
echo "";
?>
<style>
.myButton {
  box-shadow:inset 0px 0px 0px 0px #bbdaf7;
  background:linear-gradient(to bottom, #0f4c75 5%, #0f4c75 100%);
  background-color:#ABEBC6;
  border-radius:5px;
  border:3px solid #6a8caf;
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
  background:linear-gradient(to bottom, #7fcd91 5%, #7fcd91 100%);
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