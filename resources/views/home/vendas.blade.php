<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://www.npmjs.com/package/jquery.maskedinput"></script>





<body>

    <div class="grid grid-cols-3 grid-rows-2 ">
        <div class="
    order-2 
    text-center absolute top-2 right-9 left-2  h-auto w-auto ">
            <h1 class="text-center text-3xl font-semibold leading-tigh py-2">Central de Vendas</h1>
        </div>
        <div class=" order-1">
            <a href="#" class=" absolute top-3 left-3 h-auto w-auto text-base text-reigth bg-green-200 hover:bg-green-500 rounded-full py-1 px-8">Historico
                de Vendas</a>
        </div>

        <div class="order-3 text-right border-3 ">
            <a href="{{ route('home.index') }}" class=" absolute top-3 right-3 h-auto w-auto text-base text-reigth bg-green-200 hover:bg-green-500 rounded-full py-1 px-8">Acessar
                Empresa</a>
        </div>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class=" order-4 col-span-3">
        <form action="/cadastro" method="post">
            <input type="hidden" name="_token" id="csrf" value="{{ csrf_token() }}" />




                <select id="empresa" onchange="OnclickEmpresa()">
                    @foreach ($empresa as $empresa )

                    <option value="{{$empresa->id}}">{{$empresa->name}}</option>

                    @endforeach
                </select>
                <select id="vendedor">

                    @foreach ($vendedor as $vendedor )
                    <option value="{{$vendedor->id}}" idEmpresa="{{$vendedor->empresa_id}}">{{$vendedor->name}}</option>
                    @endforeach

                </select>
                <select id="produto"></select>

        


                <button type="submit"> Comprar</button>

            </form>


        </div>
    </div>



    <script src="js/vendas.js"></script>

    <script>





















        //        var empresas = <?php echo json_encode($empresa); ?>;
        //        var vendedores = <?php echo json_encode($vendedor); ?>;
        //        var produtos = <?php echo json_encode($produtos); ?>;
        //
        //        renderizarSelect("empresa", empresas);
        //
        //        function renderizarSelect(idSelect, elementos) {
        //            let select = document.getElementById(idSelect);
        //
        //            select.innerHTML = '';
        //            elementos.forEach(elemento => {
        //                select.innerHTML = select.innerHTML + `<option id="${elemento.id}">${elemento.name}</option>`;
        //            });
        //        }
        //
        //        function filtrarVendedoresProdutos(opcaoSelecionada) {
        //            let idEmpresa = empresa[opcaoSelecionada.selectedIndex].id;
        //
        //            let vendedoresFiltrados = vendedores.filter(v => v.empresas_id == idEmpresa);
        //            renderizarSelect('vendedor', vendedoresFiltrados);
        //
        //            let produtosFiltrados = produtos.filter(v => v.empresas_id == idEmpresa);
        //            renderizarSelect('produto', produtosFiltrados);
        //        }
    </script>


</body>

</html>