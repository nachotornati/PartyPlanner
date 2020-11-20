<?php

	/*
	ARCHIVO PARA DARLE BIENVENIDA AL USUARIO AL INICIAR SESION
	*/

	session_start();
	$name=$_SESSION['sendName'];
?>

<html>

	<head>
		<title> ¡Bienvenido! | PartyPlanner</title>
		<meta charset='utf-8'>
		<link rel='shortcut icon' href='../img/icons/favicon.ico' type='image/ico' />
		<link rel='icon' href='../img/icons/favicon.ico' type='image/ico' />
		<link rel='stylesheet' type='text/css' href='../css/estilos.css'>
	</head>

	<body class='width100 height100'>

		<div id='exitMessage' class='width75 height50 center'>
			<span class='fontSize2'>Bienvenido <?php echo $name;?> </span>
			<br />
			<br />
			<img class='width50' src='../img/logotexto2.png'>
		</div>

		<div id='uniqueButton' class='center bold'>
		  	<a href='profile.php'class='height100 width100'>INGRESAR</a>
		</div>

	</body>

</html>