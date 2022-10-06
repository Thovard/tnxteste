@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-semibold leading-tigh py-2">Cadastro de Vendedor da Empresa: {{ $empresa->name}}</h1>

    <form action="/empresas/{{ $empresa->id }}/vendedores" method="post">
        @include('_partials.Vendedor_form')
    </form>

@endsection