<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<script src="https://cdn.tailwindcss.com"></script>


div1 {
    color
}





<body>

    <div class="grid grid-cols-3 grid-rows-2">
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

                    

                </select>
                <select id="produto"></select>

        


                <button type="submit"> Comprar</button>

            </form>


        </div>
    </div>



   
<script src="js/vendas.js"></script>
</body>

</html>