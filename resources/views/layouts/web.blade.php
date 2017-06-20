<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/web.css">
</head>

<body>
	<div class="container">
		<nav class="navbar navbar-default navbar-top">
		  <div class="container-fluid">
		    <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Menu Desplegable</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      	</button>
		      <a class="navbar-brand" href="#">
		        <img alt="Brand" src="../resources/views/web/img/logo-web.png" height="30">
		      </a>
		    </div>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav">
			        <li class="active"><a href="#">Inicio <span class="sr-only">(current)</span></a></li>
			        <li><a href="#">Acciones</a></li>
			        <li><a href="#">Nosotros</a></li>	
			        <li><a href="#">Contacto</a></li>	
		        </ul>
	        </div>
		  </div>
		</nav>
		<div id="div_contenedor">
			<div id="logueo-form">
				<form name="logueo">
					<label for="nombre">Nombre</label>
					<input name="nombre" type="text"></input><br/>
					<label for="contrasena">Contrasena</label>
					<input name="contrasena" type="password"></input>
				</form>
			</div>
		</div>

		<footer>
			<p><b>Krhiz Project</b> Copyright 2017</p>
		</footer>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="js/web.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>