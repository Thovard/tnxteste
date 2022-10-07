@extends('layouts.app')

@section('content')
    <H1 class="text-center text-2xl font-semibold leading-tigh py-2">
        Acesso a Home da Empresa: {{ $empresa->name }}

    </H1>
    <a href="back"
        class=" absolute top-2 left-1 h-auto w-auto text-sm text-reigth bg-green-200 hover:bg-green-500 rounded-full py-2 px-8">
        Voltar
    </a>
    <a href="{{ route('empresa.edit', $empresa->id) }}"
        class=" absolute top-3 right-4 h-auto w-auto text-base text-reigth bg-green-200 hover:bg-green-500 rounded-full py-2 px-8">
        Editar
    </a>

    <br><br>
    <div class="flez-col-2 flex gap-6">
        <div class="col-span-2 flex-initial">
            <table class="flex-auto">
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
                        class="px-2 py-1 border-4 border-gray-300 
                                bg-gray-200 
                                text-left text-xs font-semibold text-gray-700 
                                uppercase tracking-wider">
                        CPF
                    </th>
                    <th
                        class="px-2 py-3 border-4 border-gray-300 
                                bg-gray-100 
                                text-center text-xs font-semibold text-gray-700 uppercase tracking-wider">
                        <a href="/empresas/{{ $empresa->id }}/vendedores"
                            class="bg-green-200 hover:bg-green-500 rounded-full text-center py-2 px-7 ">Criar novo
                            Vendedor</a>
                    </th>
                    <th
                        class="px-5 py-3 border-4 border-gray-300 
                                bg-gray-200 
                                text-left text-xs font-semibold text-gray-700 
                                uppercase tracking-wider">
                        Apagar Usuario
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
                        <td class="px-20 py-5 border-2 border-gray-200 bg-white text-sm">
                            <form action="{{ route('vendedor.delete', $vendedor->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit"
                                    class="shadow bg-purple-500 hover:bg-purple-400 text-sm focus:shadow-outline focus:outline-none text-white font-bold py-2 px-2 rounded ">
                                    Deletar Empresa
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
        <div class="flex-initial">
            <table class="
            absolute top-12 right-0 h-16 w-16
            flex-auto
            
            ">
                <tr>
                    <th colspan="2" class="text-center text-base ">
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
    </div>
@endsection
