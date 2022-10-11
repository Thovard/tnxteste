<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Empresa</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

       
</head>
<body>

    <div class="app">
        @yield('content')
    </div>

    <script>
        $("select[name='empresa']").on('change', function()
        {
            var empresa = $(this).value;
                   
        }
        );
        

        

    </script>



</body>
</html>