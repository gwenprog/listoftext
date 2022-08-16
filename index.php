<?php
	include "bdd_connect.php"
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>list of text</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<header>
		<h1>list of text</h1>
</header>
<body>


 <div id="text">

	 <?php 
		require_once "text.php";
	?>
 
</div>


<script>
    function twPleinEcran(_element) {
      var monElement = _element||document.documentElement;
      if (document.mozFullScreenEnabled) {
		if (!document.mozFullScreenElement) {
			monElement.mozRequestFullScreen();
			} else {
			document.mozCancelFullScreen();
			}
		}
		if (document.fullscreenElement) {
		if (!document.fullscreenElement) {
			monElement.requestFullscreen();
			} else {
			document.exitFullscreen();
			}
		}
		if (document.webkitFullscreenEnabled) {
		if (!document.webkitFullscreenElement) {
			monElement.webkitRequestFullscreen();
			} else {
			document.webkitExitFullscreen();
			}
		}
		if (document.msFullscreenEnabled) {
		if (!document.msFullscreenElement) {
			monElement.msRequestFullscreen();
        } else {
          document.msExitFullscreen();
        }
      }
    }
    </script>
</body>
<footer>
	Mercii
</footer>
</html>