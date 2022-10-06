@extends('layouts.app')

@section('content')
    <H1 class="text-center text-3xl font-semibold leading-tigh py-2">
        Acesso a Home da Empresa: {{ $empresa->name }}

    </H1>
    <a href="back" class=" absolute top-3 left-2 h-auto w-auto text-sm text-reigth bg-green-200 rounded-full py-2 px-6">
        Voltar
    </a>

    <a href="{{ route('empresa.edit', $empresa->id) }}"
        class=" absolute top-1 right-4 h-auto w-auto text-base text-center bg-green-200 rounded-full py-2 px-12">
        Editar
    </a>

    <br><br>
    <div>
        <table class="absolute top-9 right-2 h-auto w-auto leading-normal shadow-md rounded-lg overflow-hidden">
            <tr>
                <th class="text-right text-base ">
                    Dados da Empresa
                </th>
            </tr>
            <tr>
                <th
                    class="px-2 py-3 border-4 border-gray-300 bg-teal-400 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    CNPJ
                </th>
                <th
                    class="px-2 py-3 border-4 border-gray-300 bg-teal-400 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Telefone
                </th>
            </tr>
            <tr>
                <td class="px-20 py-5 border-2 border-gray-200 bg-white text-sm">
                    {{ $empresa->CNPJ }}
                </td>
                <td class="px-20 py-5 border-2 border-gray-200 bg-white text-sm">
                    {{ $empresa->Telefone }}
                </td>
            </tr>
        </table>
    </div>

    <div>

        <table
            class="
    border-spacing-[7px] 
    leading-normal 
    shadow-md 
    rounded-lg 
    overflow-hidden
    ">
            <tr>
                <th
                    class="
            px-2 py-3 border-4 border-gray-300 
            bg-gray-200 
            text-left text-xs font-semibold text-gray-700 
            uppercase tracking-wider">
                    Nome Funcionario
                </th>
                <th
                    class="px-5 py-3 border-4 border-gray-300 
            bg-gray-200 
            text-left text-xs font-semibold text-gray-700 
            uppercase tracking-wider">
                    CPF
                </th>
                <th
                    class="px-5 py-3 border-4 border-gray-300 
            bg-gray-100 
            text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    <a href="/empresas/{{ $empresa->id }}/vendedores"
                        class="bg-green-200 rounded-full py-2 px-6 ">Criar</a>
                </th>
            </tr>
            @foreach ($vendedor as $vendedor)
                <tr>
                    <td class="px-20 py-5 border-2 border-gray-200 bg-white text-sm">
                        {{ $vendedor->name }}
                    </td>
                    <td class="px-20 py-5 border-2 border-gray-200 bg-white text-sm">
                        {{ $vendedor->CPF }}
                    </td>
                    <td class="px-20 py-5 border-2 border-gray-200 bg-white text-sm">
                        <a href="{{ route('vendedor.index', $vendedor->id) }}">
                            Acessar paginas
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
