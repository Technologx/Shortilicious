<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>404</title>
<style>
html, body {
  font-size: 24px;	
  color: #FFF;	
  height: 100%;
  width: 100%;
  padding: 0;
  margin: 0;
}


#full-screen-background-image {
  z-index: -999;
  min-height: 100%;
  min-width: 1024px;
  width: 100%;
  height: auto;
  position: fixed;
  top: 0;
  left: 0;
}

#confused {
	z-index: -999;
	position: fixed;
	top: 199px;
	left: 325px;	
}
@-webkit-keyframes pulse {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  50% {
    -webkit-transform: scale3d(1.05, 1.05, 1.05);
    transform: scale3d(1.05, 1.05, 1.05);
  }

  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

@keyframes pulse {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  50% {
    -webkit-transform: scale3d(1.05, 1.05, 1.05);
    transform: scale3d(1.05, 1.05, 1.05);
  }

  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}
.pulse {
	-webkit-animation-name: pulse;
  animation-name: pulse;
  animation: pulse infinite;
  -webkit-animation-duration: 2s; 
    animation-duration: 2s;	
}
</style>
</head>

<body>
<img alt="full screen background image" src="imgs/404.jpg" id="full-screen-background-image" />
<img src="imgs/logo.png" height="52" width="116" /><br /><br /><br />
Are you lost? Because you really don't belong here!
<div class="pulse">
<img src="imgs/confused.png" id="confused" />
</div>
</body>
</html>