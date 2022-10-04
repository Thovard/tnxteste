@extends('layouts.app')

@section('content')

        <H1>
            Acesso a Home da Empresa: {{ $empresa->name }}

        </H1>
        <h2>
            
        <a href="back" class="teste02">Voltar</a>
        |
            <a href="{{ route('empresa.edit', $empresa->id) }}">Editar</a>
        </h2>

        <table>
            <tr>
                <td>
                    Nome Funcionario
                </td>
                <td>
                    CPF
                </td>
                <td>
                    <a href="">Criar</a>
                </td>

            </tr>
            <tr>
                <td>

                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td>
                    Nome Produto
                </td>
                <td>
                    Valor
                </td>
                <td>
                    <a href="#">Criar</a>
                </td>
            </tr>
    </table>


@endsection