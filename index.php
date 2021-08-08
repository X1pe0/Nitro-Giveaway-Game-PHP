<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Nitro Scavenger Hunt</title>
	</head>
<center>

	<body style="background-color:black;">
	<style>
body {
  color: white;
  font: 1.3rem Inconsolata, monospace;
  text-shadow: 0 0 2px #C8C8C8;
}
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
    footer {
  text-align: center;
  padding: 3px;

  color: white;
}
    </style>
</html>

        
 <script type="text/javascript">

        function Ajax()
        {
            var
                $http,
                $self = arguments.callee;

            if (window.XMLHttpRequest) {
                $http = new XMLHttpRequest();
            } else if (window.ActiveXObject) {
                try {
                    $http = new ActiveXObject('Msxml2.XMLHTTP');
                } catch(e) {
                    $http = new ActiveXObject('Microsoft.XMLHTTP');
                }
            }

            if ($http) {
                $http.onreadystatechange = function()
                {
                    if (/4|^complete$/.test($http.readyState)) {
                        document.getElementById('ReloadThis').innerHTML = $http.responseText;
                        setTimeout(function(){$self();}, 5000);
                    }
                };
        
                $http.open('GET', 'game.php');
        
                $http.send(null);
            }

        }

    </script>

<script type="text/javascript">
        setTimeout(function() {Ajax();}, 100);
    </script>
      <div id="ReloadThis"><br><br><br><br><br><br><br><br><br><br><br><br><br><p style='color:white'>Rate Limit...Please Wait...</p></br><img width="60" height="50" src="load.gif"></div>


<center>
</head>
<body>
</br>
