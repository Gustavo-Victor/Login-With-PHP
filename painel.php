<?php 
    include_once 'verifica_login.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Painel - Usuário</title>
        
        <!--CSS-->
        <link rel="stylesheet" href="./assets/style.css">
    </head>
    <body>

        <!--EXIBIR MENSAGEM-->
		<?php 
			if(isset($_SESSION['mensagem_sucesso']) and !empty($_SESSION['mensagem_sucesso'])){
				echo "<script>alert('".$_SESSION['mensagem_sucesso']."')</script>";
				unset($_SESSION['mensagem_sucesso']);
			}
		?>

        <!--EXIBIR DADOS DO USUÁRIO-->
        <div id="div-usuario">
            <h1 id="painel">Painel do Usuário</h1>            
                <label for="usuario">Usuário: </label>
                <input type="text" name="usuario" id="usuario" value="<?php echo $_SESSION['usuario']; ?>" readonly="readonly">
                <label for="senha">Senha: </label>                
                <input type="text" name="senha" id="senha" value="<?php echo $_SESSION['senha']; ?>" readonly="readonly">
                <input type="submit" id="sair" value="Sair" onclick="sair()">
        </div>

        <!--JS-->
        <script src="./assets/app.js"></script>
    </body>
</html>