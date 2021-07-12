/*pegar campo email e senha pelo ID*/
var usuario = window.document.getElementById("usuario")
var senha = window.document.getElementById("senha")

//mudar cor da bordar quando usuário estiver digitando nos campos
usuario.addEventListener('focus', ()=>{
    usuario.style.borderColor = '#4a5f6a'
})

senha.addEventListener('focus', ()=>{
    senha.style.borderColor = '#4a5f6a'
})


//voltar para a cor original da borda 
usuario.addEventListener('focusout', ()=>{
    usuario.style.borderColor = 'lightsteelblue'
})


senha.addEventListener('focusout', ()=>{
    senha.style.borderColor = 'lightsteelblue'
})


/*função para limpar campo ao recarregar a página*/
function limpar(){
    usuario.value = "";
    senha.value = "";
}


/*PRINTAR MENSAGEM E REDIRECIONAR PARA A PÁGINA DE LOGOUT*/
function sair(){
    //variáveil para permitir ao usuário cancelar o logout
    var confirmar = window.confirm('Saindo...'); 
    
    //perguntar antes de sair
    if(confirmar == true){
        window.location.href='logout.php';
    }                
}