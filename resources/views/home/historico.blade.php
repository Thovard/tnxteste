@extends('layouts.app')

@section('content')
    <div class="grid grid-rows-2">
        <div class=" w-full h-14 bg-cyan-600 
        gird rows-start-1 rows-end-1
    ">
            <h1 class="text-center
        text-3xl">
                Historico de Vendas
            </h1>
            <a href="/"
                class=" absolute top-2 left-0.5 h-auto w-auto 
               bg-blue-500 hover:bg-blue-700 text-white text-lg font-bold py-1 px-6 ">
                Voltar Vendas
            </a>
        </div>
        <div class=" gird rows-start-2 rows-end-2">

        </div>
    </div>

    <div class="tabela-empresas">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="py-3 px-6 text-center">
                        empresas</th>

                    <th class="py-3 px-6 text-center">
                        Vendedor</th>

                    <th class="py-3 px-6 text-center">
                        Produto</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($result as $result)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $result['empresa']->name }}
                        </td>
                        <td class="py-4 px-6 text-center">
                            {{ $result['vendedor']->name }}
                        </td>
                        <td class="py-4 px-6 text-center">
                            {{ $result['produto']->name }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
