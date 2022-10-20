@extends('layouts.app')

@section('content')
    <div class=" w-full h-14 bg-cyan-600 ">
        <h1 class="text-center
        text-3xl">
            central de empresas
        </h1>
            <a href="/empresas"
               class=" absolute top-2 left-0.5 h-auto w-auto 
               bg-blue-500 hover:bg-blue-700 text-white text-lg font-bold py-1 px-6 ">
                Cadastrar Nova Empresa
            </a>

            <a href="/" class=" absolute top-2 right-0.5 h-auto w-auto 
            bg-green-500 hover:bg-green-700 text-white text-lg font-bold py-1 px-14 ">modulo de vendas</a>
       

    </div>



    <form action="{{ route('home.index') }}" method="get" class="flex items-center search-empresas">
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <input type="text" name="search" placeholder="Pesquisar"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <button
            class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            <span class="sr-only">Search</span>
        </button>
    </form>

    

    <div class="tabela-empresas">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="py-3 px-6 text-center">
                        empresas</th>

                    <th class="py-3 px-6 text-center">
                        numero de funcionarios</th>

                    <th class="py-3 px-6 text-center">
                        numero de produtos</th>

                    <th class="py-3 px-6 text-center">
                        Acessar Empresa</th>
                    <th class="py-3 px-6 text-center">
                        Deletar Empresa</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($empresa as $empresas)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $empresas->name }}
                        </td>
                        <td class="py-4 px-6 text-center">
                            {{ $empresas->vendedor->count() }}
                        </td>
                        <td class="py-4 px-6 text-center">
                            {{ $empresas->produtos->count() }}
                        </td>
                        <td class="py-4 px-6 text-center">
                            <a href="{{ route('empresa.show', $empresas->id) }}"
                                class="bg-green-500 hover:bg-green-300 text-stone-50 font-bold py-2 px-6  ">
                                acessar empresa
                            </a>
                        </td>
                        <td class="py-4 px-6 text-center">
                            <form action="{{ route('empresa.delete', $empresas->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit"
                                    class="shadow bg-purple-500 hover:bg-red-600 text-sm focus:shadow-outline focus:outline-none text-white font-bold py-2 px-2 rounded ">
                                    Deletar Empresa
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
