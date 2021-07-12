<?php     
    //iniciar sessão
    session_start();

    //definir constantes
    define("SERVIDOR", 'localhost');
    define("USUARIO", 'root');
    define("SENHA", '');
    define("BANCO", 'db_login');
    
    //definir instância de conexão
    $conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO);

    //verificar se houve erro ou não
    if(mysqli_connect_error()){
        echo "Error: ".mysqli_connect_error();
    }