<?php 
    include_once 'conexao.php'; //incluir conexão

    //verificar se usuário preencheu campos e enviou formulário ou não
    if(!isset($_POST['enviar']) or empty($_POST['usuario']) or empty($_POST['senha'])){
        $_SESSION['mensagem_erro'] = "Preencha todos os campos for formulário";
        header("Location: index.php");
        exit();
    }else{
        //receber e filtrar campos do formulário
        $usuario = mysqli_escape_string($conexao, $_POST['usuario']);
        $senha = mysqli_escape_string($conexao, $_POST['senha']);
        
        //preparar consulta
        $sql = "SELECT `user_name`, `user_password` FROM tbl_user
        WHERE `user_name` = '$usuario' AND `user_password` = '".md5($senha)."'";

        //executar consulta
        $resultado = mysqli_query($conexao, $sql);

        //só para testar
        /*
        echo "<pre>";
        print_r($resultado); 
        var_dump($resultado); echo "<br/>";
        var_export($resultado); echo "<br/>";
        echo "<br/>".mysqli_num_rows($resultado)."<br/>";
        echo "</pre>";
        */

        
        //verificar se os valores digitados pelo usuário correspondem ao bd ou não
        //usuário autenticado  
        if(mysqli_num_rows($resultado)==1){
            $dados_usuario = mysqli_fetch_array($resultado);
            $_SESSION['autenticado'] = true; 
            $_SESSION['id'] = $dados_usuario['user_id'];
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            $_SESSION['mensagem_sucesso'] = "Logado com sucesso!";
            header("Location: painel.php");
            exit();
        //usuário inválido/inexistente
        }else{            
            $_SESSION['autenticado'] = false;
            $_SESSION['mensagem_erro'] = "Usuário ou senha inválidos";
            header("Location: index.php");
            exit();
        }
    }
?>