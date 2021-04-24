$(document).ready(function() {
    Mascaras();
});

function Mascaras(){
    $("#txtCEP").mask("00000-000");  
    $("#txtTelefone").mask("(00)0 0000-0000");
    $("#txtCPF").mask("000.000.000-00");
}

function validacaoEmail(field) {
    usuario = field.value.substring(0, field.value.indexOf("@"));
    dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
    
    if ((usuario.length >=1) &&
        (dominio.length >=3) &&
        (usuario.search("@")==-1) &&
        (dominio.search("@")==-1) &&
        (usuario.search(" ")==-1) &&
        (dominio.search(" ")==-1) &&
        (dominio.search(".")!=-1) &&
        (dominio.indexOf(".") >=1)&&
        (dominio.lastIndexOf(".") < dominio.length - 1)) {
    }
    else{
        alert("E-mail invalido");
        field.value = "";
    }
}

function ViaCEP(cep){
    let txtLogradouro = document.getElementById('txtLogradouro').value;
    let txtCidade = document.getElementById('txtCidade').value;
    let txtUF = document.getElementById('txtUF').value;
    let txtBairro = document.getElementById('txtBairro').value;

    $.ajax({
        method: "get",
        url: `https://viacep.com.br/ws/${cep}/json/`,
        success: function(response){
            document.getElementById('txtLogradouro').value = response.logradouro;
            document.getElementById('txtCidade').value = response.localidade;
            document.getElementById('txtUF').value = response.uf;
            document.getElementById('txtBairro').value = response.bairro;
        },
        error: function(){
            alert("Cep Inválido")
        }
    });
}