let _token = document.querySelector("input#csrf");

var select = null;

let vendedor = document.querySelector("select#vendedor")

let produtos = document.querySelector("select#produto")
    

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

            console.log(data)
         }
    })
}


function OnclickEmpresa() {
   select = document.getElementById("empresa").value;
   selectEmpresa(select)
    
}

function clerSelect(name) {
    name = document.querySelector('#'+ name)
        name.innerHTML = ""

}

function DisabledSelect(name) { 
    name = document.querySelector('#'+ name)
        name.disabled = true
}