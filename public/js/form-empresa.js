let inputs = document.querySelector(".clear")
$("#cep").change(function(){

    var cep = this.value.replace(/[^0-9]/, "");


    if(cep.length != 8){
        return false;
    }

var url = "https://viacep.com.br/ws/"+cep+"/json/";
   

    $.getJSON(url, function(dadosRetorno){
        console.log(dadosRetorno)
        let validador = dadosRetorno.erro
        try{
            if (validador == true){
                //habilitando escrita
                $('#endereco').prop("disabled", false);
                $('#bairro').prop("disabled", false);
                $('#cidade').prop("disabled", false);
                $('#uf').prop("disabled", false);

            }
            else{
                //habilitando escrita
                $('#numero').prop("disabled", false);
                //preenchendo campos com os dados do imput
            $("#endereco").val(dadosRetorno.logradouro);
            $("#bairro").val(dadosRetorno.bairro);
            $("#cidade").val(dadosRetorno.localidade);
            $("#uf").val(dadosRetorno.uf);
        }
        }catch(ex){}
    });
});

$("#cep").blur(function(){ 

    console.log(this.value)

    if ( this.value == "") {
        $("#endereco").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#uf").val("");
    }
});

function Onlynumbers(e)
{
	var tecla=new Number();
	if(window.event) {
		tecla = e.keyCode;
	}
	else if(e.which) {
		tecla = e.which;
	}
	else {
		return true;
	}
	if((tecla >= "97") && (tecla <= "122")){
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
