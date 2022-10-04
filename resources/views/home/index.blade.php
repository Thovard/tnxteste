@extends('layouts.app')

@section('content')
<h1 class="text-center text-3xl font-semibold leading-tigh py-2">
    central de empresas

    <a href="{{route('empresa.cadastroEmpresa') }}" class=" absolute top-3 left-2 h-auto w-auto text-sm text-reigth bg-green-200 rounded-full py-2 px-6"> 
        Cadastrar Nova Empresa
    </a>
</h1>





<form action="{{route('home.index')}}" method="get" class="py-5">
        <input type="text" name="search" placeholder="Pesquisar" 
        class="md:w-1/6 bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
        <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Pesquisar</button>
</form>

<div>
<table class="min-w-[50%] leading-normal shadow-md rounded-lg overflow-hidden">
    <thead>
        <tr>
            <th class="px-5 py-3 border-4 border-gray-300 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">empresas</th>

            <th class="px-5 py-3 border-4 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">numero de funcionarios</th>

            <th class="px-5 py-3 border-4 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">numero de produtos</th>

            <th class="px-5 py-3 border-4 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Acessar Empresa</th>
        
        </tr>
    </thead> 
    <tbody>
@foreach ($empresa as $empresas)

<tr>
    <td class="px-5 py-5 border-2 border-gray-200 bg-white text-sm">
        {{$empresas->name}}
    </td>
    <td class="px-5 py-5 border-2 border-gray-200 bg-white text-sm">
        
    </td>
    <td class="px-5 py-5 border-2 border-gray-200 bg-white text-sm">

    </td>
    <td class="px-20 py-5 border-2 border-gray-200 bg-white text-sm">
        <a href="{{route('home.show', $empresas->id)}}" class="bg-green-200 rounded-full py-2 px-6 ">acessar empresa</a>
    </td>
</tr>

@endforeach
</tbody>
</table>
</div>

    
@endsection