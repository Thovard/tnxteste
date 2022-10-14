<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Empresa</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://www.npmjs.com/package/jquery.maskedinput"></script>


</head>
<body>

    <div class="app">
        @yield('content')
    </div>
    <script>


        
        
        




    function mudanca(opcaoSelecionada) {
        let idEmpresa = document.getElementById("empresa");

        let opcaoValue = idEmpresa.options[idEmpresa.selectedIndex].value;

        let filtrovendedor = vendedor.filter(v => v.value == opcaoValue);

        console.log("tbEmpresa: " + tbEmpresa);
    }
    </script>

</body>
</html>