@extends('layouts.app')

@section('content')
<div class="w-full h-14 bg-cyan-600">
    <H1 class="text-center
        text-3xl">
        Acesso a Home da Empresa: {{ $empresa->name }}

    </H1>
    <a href="back" class=" absolute top-2 left-0.5 h-auto w-auto 
               bg-blue-500 hover:bg-blue-700 text-white text-lg font-bold py-1 px-6 ">
        Voltar
    </a>
    <a href="{{ route('empresa.edit', $empresa->id) }}" class=" absolute top-3.5 right-8 h-auto w-auto 
            bg-green-500 hover:bg-green-700 text-white text-lg font-bold py-1 px-24">
        Editar
    </a>
</div>

<br><br>
<div class=" grid grid-cols-2">
    <div class=" order-2 ">
        <table class="absolute top-16 right-2 table-auto">
            <tr>
                <th colspan="2" class="text-center text-base px-2 py-3 border-4 border-gray-300 bg-teal-400 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider ">
                    Dados da Empresa
                </th>
            </tr>
            <tr>
                <th class="px-2 py-3 border-4 border-gray-300 bg-teal-400 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    CNPJ
                </th>
                <th class="px-2 py-3 border-4 border-gray-300 bg-teal-400 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Telefone
                </th>
            </tr>
            <tr>
                <td class="px-6 py-5 border-2 border-gray-200 bg-white text-sm">
                    {{ $empresa->CNPJ }}
                </td>
                <td class="px-6 py-5 border-2 border-gray-200 bg-white text-sm">
                    {{ $empresa->Telefone }}
                </td>
            </tr>
        </table>
    </div>

    <div class="flex order-1 grid grid-rows-2">
        <div class=" ">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="py-3 px-12 text-center">
                            Nome Funcionario
                        </th>
                        <th class="py-3 px-12 text-center">
                            CPF
                        </th>
                        <th class="py-3 px-2 break-inside-avoid-column text-center">
                            <a href="/empresas/{{ $empresa->id }}/vendedores" class=" bg-green-600 hover:bg-green-300 rounded-full text-center text-white py-2 px-4 ">
                                Criar novo Vendedor</a>
                        </th>
                        <th class="py-3 px-12 text-center">
                            Apagar Usuario
                        </th>
                    </tr>
                    @foreach ($vendedor as $vendedor)
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            @if ($vendedor->image)
                            <img src="{{ url("storage/{$vendedor->image}") }}" alt="{{ $vendedor->name }}" class="object-cover w-20">

                            @else
                            <img src="{{ url("imagens/2318271-icone-do-perfil-do-usuario-grátis-vetor.jpg")}}" alt="{{ $vendedor->name }} " class="object-cover w-20">
                            @endif
                            {{ $vendedor->name }}
                        </td>
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $vendedor->CPF }}
                        </td>
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="{{ route('vendedor.index', $vendedor->id) }}" class="bg-green-500 hover:bg-green-300 text-stone-50 font-bold py-2 px-6  ">
                                Acessar paginas
                            </a>
                        </td>
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <form action="{{ route('vendedor.delete', $vendedor->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="shadow bg-purple-500 hover:bg-red-600 text-sm focus:shadow-outline focus:outline-none text-white font-bold py-2 px-2 rounded ">
                                    Deletar Empresa
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

        <div class="">
            <br>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="py-3 px-6 text-center">
                            Produtos
                        </th>
                        <th class="py-3 px-6 text-center">
                            Categoria
                        </th>
                        <th class="py-3 px-6 text-center">
                            <a href="{{ route('produto.create',  $empresa->id)}}" class="bg-green-600 hover:bg-green-300 rounded-full text-center text-white py-2 px-7">Criar Novo produtos</a>
                        </th>
                        <th class="py-3 px-6 text-center">
                            Apagar Usuario
                        </th>
                    </tr>
                </thead>
                @foreach ($produtos as $produtos)
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">

                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            @if ($vendedor->image)
                            <img src="{{ url("storage/{$produtos->image}") }}" alt="{{ $produtos->name }}" class="object-cover w-20">

                            @else
                            <img src="{{ url("imagens/2318271-icone-do-perfil-do-usuario-grátis-vetor.jpg")}}" alt="{{ $vendedor->name }} " class="object-cover w-20">
                            @endif
                            {{$produtos->name}}
                        </td>
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$produtos->Categoria}}</td>
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="{{ route('produto.index', $produtos->id) }}" class="bg-green-500 hover:bg-green-300 text-stone-50 font-bold py-2 px-6  ">Acessar Pagina</a>
                        </td>
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <form action="{{ route('produto.delete', $produtos->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="shadow bg-purple-500 hover:bg-red-600 text-sm focus:shadow-outline focus:outline-none text-white font-bold py-2 px-2 rounded  ">
                                    Deletar Empresa
                                </button>
                            </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection