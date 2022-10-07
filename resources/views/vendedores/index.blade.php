@extends('layouts.app')

@section('content')
    <div>
        <div>
            <h1 class="
            text-center text-3xl

            ">
                Dados do vendedor
            </h1>
        </div>
    </div>
    <div>
        <form action="

    ">
            <button></button>
        </form>
    </div>

    <div>
        <a href="{{route('vendedor.edit', $vendedor->id)}}"
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
                    {{ $vendedor->name }}
                </td>
            </tr>
            <tr>
                <th class="px-5 py-3 border-4 border-gray-300 ">
                    CPF:
                </th>
                <td class="px-20 py-5 border-2 border-gray-200 bg-white text-sm">
                    {{ $vendedor->CPF }}
                </td>
            </tr>
            <tr>
                <th class="px-5 py-3 border-4 border-gray-300 ">
                    Telefone:
                </th>
                <td class="px-20 py-5 border-2 border-gray-200 bg-white text-sm">
                    {{ $vendedor->Telefone }}
                </td>
                <tr>
                    <th class="px-5 py-3 border-4 border-gray-300 ">
                        Empresa:
                    </th>
                    <td class="px-20 py-5 border-2 border-gray-200 bg-white text-sm">    
                        {{$name}}
                    </td>
                </tr>
            </tr>
        </table>
    </div>
@endsection
