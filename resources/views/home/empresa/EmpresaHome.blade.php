<H1>
    Acesso a Home da Empresa: {{ $empresa->name }}

</H1>
<h2>
    <a href="{{ route('empresa.edit', $empresa->id) }}">Editar</a>
    |
    <a href="#">Deletar</a>
    |
    <a href="back">Voltar</a>
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

        </td>
    </tr>
</table>
