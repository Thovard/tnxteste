<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Empresa</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
    <script src="https://cdn.tailwindcss.com"></script>


</head>
<body class="bg-gray-900">

    <div class="app">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
</body>
</html>