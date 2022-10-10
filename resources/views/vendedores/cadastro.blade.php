@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-semibold text-center leading-tigh py-2">Cadastro de Vendedor da Empresa: {{ $empresa->name}}</h1>
<a href="{{ route('empresa.show', $empresa->id)}}" class=" absolute top-2 left-1 h-auto w-auto text-sm text-reigth bg-green-200 hover:bg-green-500 rounded-full py-2 px-8">Voltar</a>

        @include('includes.validations-form')
    <form action="{{ Route('vendedor.store-vendedor', $empresa->id)}}" method="post" enctype="multipart/form-data">
        @include('_partials.Vendedor_form')
    </form>

@endsection