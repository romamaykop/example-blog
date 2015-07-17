<?php
session_start();
?> 

<html>

<head>

<title>Blog</title>
<link rel="stylesheet" type="text/css" href="style.css"> 



</head>

<body>
<div id="container">
<div id="header">
	<h1 align='center'>Блог водителей серебристых девяток</h1>
	</div>

  <?php
  require_once 'new.php';
  ?> 
  
 <div id="podval">
	<p align='center'>&copy; Kalashnikov Roman and ProgFors</p>
	</div>
 </div>
</body>
