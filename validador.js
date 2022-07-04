/* Mascaras para Letras minusculas no email */
			
function mini(){
    var x = document.getElementById("email");
    x.value = x.value.toLowerCase();
}

/* Máscaras do Telefone */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
    return document.getElementById( el );
}
window.onload = function(){
id('telefone').onkeyup = function(){
mascara( this, mtel );
}
}

/* Validação se Senha */

function validarSenha() {
    var senha = document.formuser.senha.value;
    var confirma_senha = document.formuser.confirma_senha.value;
    
    if (senha == confirma_senha)
        alert("Senhas Iguais");
        else
        alert("Revisar Senhas, Senhas Diferentes");
}