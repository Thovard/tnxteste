@extends('layouts.app')

@section('content')
<title class="">
    central de empresas
</title>
<h1 >
    central de empresas

</h1>
<h3><a href="{{route('empresa.cadastroEmpresa') }}"> 
    Cadastrar Nova Empresa
</a></h3>

<form action="{{route('home.index')}}" method="get">
        <input type="text" name="search" placeholder="Pesquisar">
        <button>Pesquisar</button>
</form>

<div>
<table>
    <thead>
        <tr>
            <th>empresas</th>
            <th>|</th>
            <th>numero de funcionarios</th>
            <th>|</th>
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
        
    </td>
    <td>

    </td>
    <td></td>
    <td></td>
    <td>
        <a href="{{route('home.show', $empresas->id)}}">acessar empresa</a>
    </td>
</tr>

@endforeach
</tbody>
</table>
</div>

    
@endsection