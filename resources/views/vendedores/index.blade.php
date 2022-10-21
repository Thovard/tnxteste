@extends('layouts.app')

@section('content')
    <div class="w-full h-10 bg-cyan-600	">

        <h1 class="
            text-center text-2xl">
            Dados do vendedor
        </h1>
        <a href="{{ route('empresa.show', $empresaid) }}"
            class=" absolute top-0 left-0
            bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-20">Voltar</a>

    </div>

    <br>
    <div>

    </div>

    <div>
        <table class="absolute left-2 ">
            <tr>
                <td class="
                text-center text-base
                py-0 px-1
                border-4 border-gray-200
                bg-white">
                    <a href="{{ route('vendedor.edit', $vendedor->id) }}"
                        class="
                 text-base text-center
                 border border-2 border-gray-200
                 bg-green-200 
                 hover:bg-green-500
                 w-4
                 py-0 px-7">
                        Editar
                    </a>
                </td>
                <td 
                class="
                text-center text-base
                py-0 px-4
                border-4 border-gray-200
                bg-white
                ">
                    Dados do Funcionario
                </td>
            </tr>
            <tr>
                <th class="px-5 py-3 border-4 border-gray-300 bg-white ">
                    Nome:
                </th>
                <td class="px-20 py-5 border-2 border-gray-200 bg-white text-sm">
                    {{ $vendedor->name }}
                </td>
            </tr>
            <tr>
                <th class="px-5 py-3 border-4 border-gray-300 bg-white ">
                    CPF:
                </th>
                <td class="px-20 py-5 border-2 border-gray-200 bg-white text-sm">
                    {{ $vendedor->CPF }}
                </td>
            </tr>
            <tr>
                <th class="px-5 py-3 border-4 border-gray-300 bg-white ">
                    Telefone:
                </th>
                <td class="px-20 py-5 border-2 border-gray-200 bg-white text-sm">
                    {{ $vendedor->Telefone }}
                </td>
            <tr>
                <th class="px-5 py-3 border-4 border-gray-300 bg-white ">
                    Empresa:
                </th>
                <td class="px-20 py-5 border-2 border-gray-200 bg-white text-sm">
                    {{ $name }}
                </td>
            </tr>
            </tr>
        </table>
    </div>
@endsection
