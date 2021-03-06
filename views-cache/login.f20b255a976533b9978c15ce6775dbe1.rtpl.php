<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
	<title>Intranet PENPA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Bootstrap 4 -->
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap/bootstrap.min.css">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
	<!-- GoogleFonts - OpenSans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<!-- Fontawesome 5.0-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>

<!-- Init of Bootstrap -->

<div class="container">
	
	<div class="col-md-12 col-md-offset-6">
		<h1><img src="../../assets/img/logo_int_neg.png" alt=""></h1>

		<!-- Form for Login -->
			<form method="POST" class="log" action="/admin/login">

				<br><br><p>Acesso ao sistema:</p><br>

				<!-- Input do E-mail -->
				<input type="text" name="login" id="rs" class="form-control field" placeholder="Digite seu login" required autofocus><br>

				<!-- Input do Senha -->
				<input type="password" name="password" id="password" class="form-control field" placeholder="Digite sua senha" required><br>

				<!-- Botão para fazer Login -->
				<button class="btn btn-default" type="submit">
					 <i class="fa fa-lock"></i>&nbsp;&nbsp;Entrar
				</button><br><br>
			</form>

			<!-- Copyright Marcos André -->

			<p id="credits">&copy; <a href="http://tecnomarcos.com.br" target="_blank" style="color: #fff;">Tecnomarcos</a> - &lt;?php echo date("Y"); ?&gt; - Todos os direitos Reservados</p>
		

	</div>

</div>

</body>
</html>