@extends('layouts.app')

@section('content')
    <div>
        <div class="w-full h-16 bg-cyan-600	grid grid-cols-3 divide-x-0">
            <div
            class="
            
            order-2
            "> 
                <h1 class=" 
                titulo
                absolute top-2
                text-center
                text-2xl
                ">Central de Vendas</h1>
            </div>
            <div class="
            text-center order-1
            ">
                <a href="#" class="absolute top-2 left-0
                bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-20">Historico
                    de Vendas</a>
            </div>

            <div class="
            text-center order-3
            
            ">
                <a href="{{ route('home.index') }}" class="
                absolute top-2 right-0
                bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-28 ">Acessar
                    Empresa</a>
            </div>
        </div>
        <div class="w-full h-20 relative inset-y-32 ">
            <form>
                <div>
                    <input type="hidden" name="_token" id="csrf" value="{{ csrf_token() }}" />

                    <select id="empresa" onchange="OnclickEmpresa()" class="block p-2 mb-6 w-full text-center text-lg text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected disabled hidden>Selecionar uma Empresa</option>
                        @foreach ($empresa as $empresa)
                            <option value="{{ $empresa->id }}">{{ $empresa->name }}</option>
                        @endforeach
                    </select><br>
                </div>
                <div>
                    <select id="vendedor" class="block p-2 mb-6 w-full text-center text-lg text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </select><br>
                </div>
                <div>
                    <select id="produto" class="block p-2 mb-6 w-full text-center text-lg text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    </select>
                </div>

                <div class="
                relative inset-y-1">


                <button type="button" class="
                
                bg-blue-500 hover:bg-blue-700 
                text-white font-bold py-2 px-24
                 border border-blue-700 rounded"> Comprar </button>

            </form>
        </div>

        </div>
    </div>




    <script src="js/vendas.js"></script>
@endsection
