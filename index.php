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



</body>
</html>