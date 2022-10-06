@extends('layouts.app')

@section('content')

        <H1 class="text-3xl font-semibold leading-tigh py-2">
            Acesso a Home da Empresa: {{ $empresa->name }}

        </H1>            
        <a href="back" class=" bg-sky-600 rounded-full py-2 px-6">Voltar</a>

            <a href="{{ route('empresa.edit', $empresa->id) }}" class=" bg-emerald-400 rounded-full py-2 px-6">Editar</a>   

            <br><br>
            
<div>

    <table class="min-w-[50%] leading-normal shadow-md rounded-lg overflow-hidden">
            <tr>
                <td class="px-2 py-3 border-4 border-gray-300 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Nome Funcionario
                </td>
                <td class="px-5 py-3 border-4 border-gray-300 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"> 
                    CPF
                </td>
                <td class="px-5 py-3 border-4 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    <a href="/empresas/{{$empresa->id}}/vendedores" class="bg-green-200 rounded-full py-2 px-6 ">Criar</a>
                </td>
            </tr>
        </table>
 </div>

 <a href="{{route('vendedor.index', $empresa->name) }}" > 
    vendedor
</a>

@endsection