<html>
	<title>Nitro Scavenger Hunt</title>
<center>
  <img src="unnamed.png">
	<body style="background-color:black;">
	<style>
.myButton {
  text-align: center; 
  line-height: 75px;
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
	height: 80px;
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
    footer {
  text-align: center;
  padding: 3px;

  color: white;
}
    </style>
</html>
<br><br><br><br>


<center>
  
   <?php
if(htmlspecialchars(isset($_COOKIE["username"]))){
    echo "<h2 style='color:white'>Sorry " . htmlspecialchars($_COOKIE["username"]) . ", looks like the wrong code. Try again?</h2><br><p style='color:white'>Auto Retrying In 5 Seconds...</p> ";
} else{
    header("Location: /nsess.php");
}
?>
<br><br>
<a href='/' class='myButton'>Retry</a>
</head>
<body>
</br>
