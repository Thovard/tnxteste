<title class="">
    central de empresas
</title>
<h1>
    central de empresas

</h1>
<h2><a href="{{route('empresa.cadastroEmpresa') }}"> Cadastrar</a></h2>

<div>
<table>
    <thead>
        <tr>
            <th>empresas</th>
            <th>numero de funcionarios</th>
            <th>numero de produtos</th>
        </tr>
    </thead> 
    <tbody>
@foreach ($empresa as $empresas)

<tr>
    <td>
        {{$empresas->name}}
    </td>
    <td>
        <a href="{{route('home.show', $empresas->id)}}">acessar empresa</a>
    </td>
    <td>

    </td>
    <a href="" ></a>
</tr>

@endforeach
</tbody>
</table>
</div>
