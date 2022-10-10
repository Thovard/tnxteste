@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-semibold leading-tigh py-2">Cadastro de Vendedor da Empresa: {{ $empresa->name}}</h1>

        @include('includes.validations-form')
    <form action="{{ Route('produtos.store-produtos', $empresa->id)}}" method="post">
        @include('_partials.Produtos_form')
    </form>

@endsection