function enviar(){

    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var msg = document.getElementById('msg').value;

    if( nome == '' || email == '' || msg == ''){
        alert('complete os campos por favor!')
    }else{
        document.getElementById('formulario').submit();
    }
}