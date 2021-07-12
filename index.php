<?php
	//iniciar sessão 
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Index</title>

		<!--CSS-->
		<link type="text/css" rel="stylesheet" href="./assets/style.css">
	</head>
	<body onload="limpar()">

		<!--EXIBIR MENSAGEM-->
		<?php 
			if(isset($_SESSION['mensagem_erro']) and !empty($_SESSION['mensagem_erro'])){
				echo "<script>alert('".$_SESSION['mensagem_erro']."')</script>";
				unset($_SESSION['mensagem_erro']);
			}
		?>

		<!--FORMULÁRIO LOGIN-->
        <form action="login.php" id="form" name="form" method="POST">
            <h3>Entrar</h3>
            <input type="text" name="usuario" id="usuario" placeholder="Seu usuário..." required="required">
            <input type="password" name="senha" id="senha" placeholder="Sua senha..." required="required">
            <input type="submit" name="enviar" value="Enviar">
        </form>
	</body>

	<!--JS-->
	<script src="./assets/app.js"></script>
</html>