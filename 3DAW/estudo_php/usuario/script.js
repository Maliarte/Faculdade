var nome = document.getElementById('nome');
var sobrenome = document.getElementById('sobrenome');
var email = document.getElementById('email');
var senha = document.getElementById('senha');

function validaCampos() {
    if (nome.value.length < 1) {
        alert('Campo nome não pode estar vazio');
        nome.focus();
    } else if (sobrenome.value.length < 1){
        alert('Campo sobrenome não pode estar vazio');
        sobrenome.focus();
    } else if (email.value.length < 1){
        alert('Campo e-mail não pode estar vazio');
        email.focus();
    } else if (senha.value.length < 1){
        alert('Campo senha não pode estar vazio');
        senha.focus();
    }
}

function retornarParaUsuario(){
    alert("Usuário alterado com sucesso.")
    window.location.href = 'usuario.php';
}