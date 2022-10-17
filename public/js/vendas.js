let _token = document.querySelector("input#csrf");

var select = null

function selectEmpresa( option ){
    fetch('/cadastro', {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "dataType": 'json',
            'X-CSRF-TOKEN': _token.value,
        },
        body: JSON.stringify({ op:option })
    }).then((data) => data.json()).then((data) => {
         if (data.resposta === true) {
            clerSelect()
            console.log(data.dados)
         }
    })
}

function OnclickEmpresa() {
   select = document.getElementById("empresa").value;
   selectEmpresa(select)
    
}

function clerSelect() {
    var vendedor = document.getElementById("vendedor")
    vendedor.innerHTML = ""

}

 function addVendedores() {

    var vendedor = document.get("dados")
    $('#vendedores').append(`<option value='${id}'>${name}</option>`);
}