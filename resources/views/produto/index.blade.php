@extends('layouts.app')

@section('content')
    <div>
        <div>
            <h1 class="
            text-center text-3xl

            ">
                Dados do vendedor
            </h1>
            <a href="{{ route('empresa.show', $empresa->id)}}" class=" absolute top-2 left-1 h-auto w-auto text-sm text-reigth bg-green-200 hover:bg-green-500 rounded-full py-2 px-8">Voltar</a>
        </div>
    </div>

<br>    
    <div>
        <a href="{{ route('produto.edit', $produtos->id) }}"
            class="
         absolute left-1 top-19 h-auto w-auto 
         text-base text-center
         border border-2 border-gray-200
         bg-green-200 
         hover:bg-green-500
         py-0 px-7">
            Editar
        </a>
    </div>

    <div>
        <table>
            <tr>
                <td colspan="2"
                    class="
                    text-center text-base
                    py-0 px-4
                    border-4 border-gray-200
                ">
                    Dados do Funcionario
                </td>
            </tr>
            <tr>
                <th class="px-5 py-3 border-4 border-gray-300 ">
                    Nome:
                </th>
                <td class="px-20 py-5 border-2 border-gray-200 bg-white text-sm">
                    {{ $produtos->name }}
                </td>
            </tr>
            <tr>
                <th class="px-5 py-3 border-4 border-gray-300 ">
                    CPF:
                </th>
                <td class="px-20 py-5 border-2 border-gray-200 bg-white text-sm">
                    {{ $produtos->Categoria }}
                </td>
            </tr>
                <tr>
                    <th class="px-5 py-3 border-4 border-gray-300 ">
                        Empresa:
                    </th>
                    <td class="px-20 py-5 border-2 border-gray-200 bg-white text-sm">    
                        {{$empresa->name}}
                    </td>
                </tr>
            </tr>
        </table>
    </div>
@endsection
