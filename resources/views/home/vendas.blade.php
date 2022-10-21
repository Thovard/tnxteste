@extends('layouts.app')

@section('content')

    <div class="w-full h-14 bg-cyan-600	grid grid-cols-3 divide-x-0">
        <div class="
            
            order-2
            ">
            <h1 class=" 

                text-center
                text-3xl
                ">Central de Vendas</h1>
        </div>
        <div class="text-center order-1">

            <a href="#" class="absolute top-2 left-0
                bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-20">Historico de Vendas</a>
        </div>

        <div class="text-center order-3">

            <a href="{{ route('home.index') }}" class="
                absolute top-2 right-0
                bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-28 ">Acessar Empresa</a>

        </div>
    </div>

    <div class=" caixa-vendas flex grid grid-cols-8 grid-rows-4 ">
        
            <div class="grid-col col-start-4 col-end-6">
                <input type="hidden" name="_token" id="csrf" value="{{ csrf_token() }}" />

                <select id="empresa" onchange="OnclickEmpresa()" class="
                select-vendas
                bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected disabled hidden>Selecionar uma Empresa</option>
                    @foreach ($empresa as $empresa)
                    <option value="{{ $empresa->id }}">{{ $empresa->name }}</option>
                    @endforeach
                </select><br>
            </div>
            <div class= "
            grid-row row-start-2 row-end-2    
            grid-col col-start-4 col-end-6">
                <select id="vendedor" disabled class="
                select-vendas
                bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </select><br>
            </div>
            <div class= "
            grid-row row-start-3 row-end-3    
            grid-col col-start-4 col-end-6">
                <select id="produto" disabled class="
                select-vendas
                bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                </select>
            </div>
<div class= "
                
                grid-row row-start-4 row-end-4   
                grid-col col-start-4 col-end-6">
            
                <button type="button" id="comprar" class= "text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
  <svg aria-hidden="true" class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path></svg>
  Buy now
</button>
</div>
    </div>







<script src="js/vendas.js"></script>
@endsection