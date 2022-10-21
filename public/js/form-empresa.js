let inputs = document.querySelector(".clear")
let buttonCompra = document.querySelector('#comprar');
let _token = document.querySelector("input#csrf")
$("#cep").change(function () {

    var cep = this.value.replace(/[^0-9]/, "");


    if (cep.length != 8) {
        return false;
    }

    var url = "https://viacep.com.br/ws/" + cep + "/json/";


    $.getJSON(url, function (dadosRetorno) {
       
        let validador = dadosRetorno.erro
        console.log(validador)
        let bairro = dadosRetorno.bairro
        try {
            $('#cep').ready(function () {
                 if (validador == true) {
                    //habilitando escrita
                    $("#endereco").val("");
                    $('#endereco').prop("disabled", false);
                    $("#bairro").val("");
                    $('#bairro').prop("disabled", false);
                    $("#cidade").val("");
                    $('#cidade').prop("disabled", false);
                    $("#uf").val("");
                    $('#uf').prop("disabled", false);
            
                    $('#numero').prop("disabled", false);

                }
                else {
                 if (bairro == "") {
                    $('#uf').prop("disabled", true);
                    $('#endereco').prop("disabled", true);
                    $('#cidade').prop("disabled", true);
                    $('#bairro').prop("disabled", false);
                    $('#numero').prop("disabled", false);
                }
                else if (bairro != "") {
                    $('#uf').prop("disabled", true);
                    $('#endereco').prop("disabled", true);
                    $('#cidade').prop("disabled", true);
                    $('#bairro').prop("disabled", true);
                }
            
                    //habilitando escrita
                    $('#numero').prop("disabled", false);
                
            }})

            //preenchendo campos com os dados do imput
            $("#endereco").val(dadosRetorno.logradouro);
            $("#bairro").val(dadosRetorno.bairro);
            $("#cidade").val(dadosRetorno.localidade);
            $("#uf").val(dadosRetorno.uf);

        } catch (ex) { }
    });
});

$("#cep").change(function () {

    console.log(this.value)

    if (this.value == "") {
        $("#endereco").val("");
        $('#endereco').prop("disabled", true);
        $("#bairro").val("");
        $('#bairro').prop("disabled", true);
        $("#cidade").val("");
        $('#cidade').prop("disabled", true);
        $("#uf").val("");
        $('#uf').prop("disabled", true);

        $('#numero').prop("disabled", true);
    };
});


function Onlynumbers(e) {
    var tecla = new Number();
    if (window.event) {
        tecla = e.keyCode;
    }
    else if (e.which) {
        tecla = e.which;
    }
    else {
        return true;
    }
    if ((tecla >= "97") && (tecla <= "122")) {
        return false;
    }
}

//mask para o cep
$("#cep").inputmask({
    mask: ['99999-999'],
    keepStatic: true
});

//mask para o cnpj
$("#cnpj").inputmask({
    mask: ['999.999.999/0001-99'],
    keepStatic: true
});
//mask para o telefone
$("#telefone").inputmask({
    mask: ['(+55) 9 9999-9999'],
    keepStatic: true
});


function SaveAction() {
    let name =  $('#name').val();
    let password = $('#password').val();
    let cnpj = $("#cnpj").val();
    let telefone = $("#telefone").val();
    let cep = $("#cep").val();
    let endereco = $("#endereco").val();
    let cidade = $("#cidade").val();
    let uf = $("#uf").val();
    let numero = $("#numero").val();
    let bairro = $("#bairro").val();

    fetch('/empresa', {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "dataType": 'json',
            'X-CSRF-TOKEN': _token.value,
        },
        body: JSON.stringify({ name:name,password:password,cnpj:cnpj,telefone:telefone,cep:cep,endereco:endereco,cidade:cidade,estado:uf,numero:numero,bairro:bairro})
    }).then((data) => {
       console.log(data)
       window.location.href = '/home'
    })
    
}
buttonCompra.addEventListener("click", SaveAction)

