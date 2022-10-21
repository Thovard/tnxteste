@extends('layouts.app')

@section('content')
<div class="w-full h-10 bg-cyan-600	">
    <h1 class="
     text-center text-2xl">Cadastro de Vendedor da Empresa: {{ $empresa->name}}</h1>
<a href="{{ route('empresa.show', $empresa->id)}}" class=" absolute top-0 left-0
    bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-20">Voltar</a>
</div>
        @include('includes.validations-form')
    <form action="{{ Route('vendedor.store-vendedor', $empresa->id)}}" method="post" enctype="multipart/form-data">
        @include('_partials.Vendedor_form')
    </form>

@endsection