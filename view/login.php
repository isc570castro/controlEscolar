<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>ITZ</title>
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="dist/css/login/style.css" />

	<!-- Google Font -->
	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core CSS -->
	<link type="text/css" rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <!-- Bootstrap Core JS -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	
	<section class="container">
	    <section class="login-form">
		<form method="post" action="?c=Login&a=Acceder" role="login">
			<div>
				<img width="50%" src="dist/img/logo.png" alt="" />
				<h4>Accede con tu cuenta</h4>
			</div>			
			<input type="text" name="usuario" placeholder="Usuario" required class="form-control input-lg" />
			<input type="password" name="password" placeholder="Contraseña" required class="form-control input-lg" />
			<button type="submit" name="go" class="btn btn-lg btn-block btn-info">Acceder</button>

		</form>
		</section>
	</section>
	
</body>
</html>