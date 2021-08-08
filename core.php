<body>
<meta http-equiv="refresh" content="5; URL=/" />
    <center>
        <img src="unnamed.png">
        <h3 style="color:white">Woops! Looks like an issue with the code lock... Starting over.</h3>
</center>
    <?php
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
<div class="wrap">
    <div class="glitch" data-text="GO BACK">CORRUPTION</div> 
</div>
</body>
<style>
@import "compass/css3";
@import url(https://fonts.googleapis.com/css?family=Exo+2:300,400,500,600);

body{
    font: 1.3rem Inconsolata, monospace;
    text-shadow: 0 0 2px #C8C8C8;
    background-color: black;

    //demo only, although x is probably always necessary
    overflow: hidden;
}

.wrap {
    background: black url(https://nabyte.com/imgs/3e24c5af26649da687c669d5e2a88fd2499eadb12021-8-8-15-28-53.gif) center center no-repeat;
    background-size: contain;
    height: 50vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.glitch{
    font-family: 'Exo 2', sans-serif;
    font-weight: 600;
    color:white;
    font-size:100px;
    position:relative;
    margin:0 auto;
    text-shadow:
        0px -5px 10px rgba(255,255,255,1),
        0px 0px 5px rgba(255,255,255,0),
        0px 0px 10px rgba(255,255,255,0),
        0px 0px 15px rgba(255,255,255,0),
        0px 0px 20px rgba(255,255,255,0);
    animation:noise-anim-2 3s infinite linear alternate-reverse, shift 4s ease-in-out infinite alternate, blur 8s ease-in-out infinite alternate;
    @include transform(skewX(0deg));
}

@include keyframes(blur){
    0%,40%, 50%, 60%, 90%, 95%, 100%{
        text-shadow:
        0px -5px 10px rgba(255,255,255,1),
        0px 0px 5px rgba(255,255,255,0),
        0px 0px 10px rgba(255,255,255,0),
        2px 1px 15px rgba(100,240,255,0),
        0px 0px 20px rgba(255,255,255,0);
    }
    45%, 75% {
    text-shadow:
        0px -5px 10px rgba(255,255,255,1),
        0px 0px 5px rgba(255,255,255,1),
        0px 0px 10px rgba(255,255,255,1),
        2px 1px 15px rgba(100,240,255,1),
        0px 0px 20px rgba(255,255,255,1);
    }
    
    97.5% {
    text-shadow:
        0px -5px 10px rgba(255,255,255,0),
        0px 0px 5px rgba(255,255,255,0),
        0px 0px 10px rgba(255,255,255,0),
        2px 1px 4px rgba(255,100,100,1),
        0px 0px 20px rgba(255,255,255,0);
    }
}

.glitch:after{
    content:attr(data-text);
    position:absolute;
    left:3px;
    text-shadow: -1px 0 red;
    top:0;
    color: transparent;
    background: transparent;
    overflow:hidden;
    clip:rect(0,900px,0,0); 
    animation:noise-anim-2 3s infinite linear alternate-reverse, shift 4s ease-in-out infinite alternate;
    @include transform(skewX(0deg));
    z-index: -2;
    opacity: .7;
}

.glitch:before{
    content:attr(data-text);
    position:absolute;
    left:1px;
    text-shadow: -3px 0 cyan; 
    top:0;
    color: transparent;
    background: transparent;
    overflow: hidden;
    clip:rect(0,900px,0,0); 
    animation:noise-anim-2 3s infinite linear alternate-reverse, shift 4s ease-in-out infinite alternate;
    @include transform(skewX(0deg));
    z-index: -1;
    opacity: .8;
}

@keyframes noise-anim{
    $steps:20;
    @for $i from 0 through $steps{
        #{percentage($i*(1/$steps))}{
            clip:rect(random(100)+px,9999px,random(100)+px,0);
        }
    }
}

@keyframes noise-anim-2{
  $steps:20;
  @for $i from 0 through $steps{
    #{percentage($i*(1/$steps))}{
      clip:rect(random(100)+px,9999px,random(100)+px,0);
    }
  }
}

@include keyframes(shift){
  0%,40%, 44%, 58%, 61%, 65%,69%,73%,100%{
    @include transform(skewX(0deg))
  }
  41%{
    @include transform(skewX(10deg));
  }
  42%{
    @include transform(skewX(-10deg));
  }
  59%{
    @include transform(skewX(40deg) skewY(10deg));
  }
  60%{
    @include transform(skewX(-40deg) skewY(-10deg));
  }
  63%{
    @include transform(skewX(10deg) skewY(-5deg));
  }
  70%{
    @include transform(skewX(-50deg) skewY(-20deg));
  }
  71%{
    @include transform(skewX(10deg) skewY(-10deg));
  }
}
</style>