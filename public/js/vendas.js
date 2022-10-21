let _token = document.querySelector("input#csrf");

var select = null;

var empresas = document.querySelector("#empresa")

let vendedor = document.querySelector("select#vendedor")

let produtos = document.querySelector("select#produto")

let buttonCompra = document.querySelector('#comprar');

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
            clerSelect('vendedor')

            let vendedorName = data.vendedor;

            vendedorName.forEach((vendedorName) => {
                vendedor.innerHTML += "<option value=" + vendedorName.id +">" + vendedorName.name + "</option>"
            })
            clerSelect('produto')
            let produtosName = data.produtos;

            produtosName.forEach((produtosName) => {
                produtos.innerHTML += "<option value="+ produtosName.id + ">" + produtosName.name + "</option>"
            })

            let teste = vendedorName.length
            $('#empresa').ready(function() {
             
             if (teste == 0) {
                $('#vendedor').prop("disabled", true);
                $('#produto').prop("disabled", true);
             }
               else if (teste != 0) {
                 $('#vendedor').prop("disabled", false);
                 $('#produto').prop("disabled", false);
             }
            });
            alert(produtos.value)
         }
    })
}


function OnclickEmpresa() {
   select = document.getElementById("empresa").value;
   selectEmpresa(select);

   let opção = document.querySelector('#empresa').value;

   let opção2 =  opção.vendedor
   console.log(opção.value)
   if (opção != "") {
       $('#vendedor').prop("disabled", false);
       $('#produto').prop("disabled", false);
   }
    
}

function clerSelect(name) {
    name = document.querySelector('#'+ name)
        name.innerHTML = ""

}

function DisabledSelect(name) { 
    name = document.querySelector('#'+ name)
        name.disabled = true
}

function SaveAction() {
    let optionProduto = produtos.value;
    let optionVendedor = vendedor.value;
    let optionEmpresas = empresas.value;
    

    fetch('/cadastro', {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "dataType": 'json',
            'X-CSRF-TOKEN': _token.value,
        },
        body: JSON.stringify({ op:option })
    }).then((data) => data.json()).then((data) => {

})
}
buttonCompra.addEventListener("click", SaveAction)
    