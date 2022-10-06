@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-semibold leading-tigh py-2">Cadastro de empresa</h1>

<h3>
    <a href="/home" class=" bg-sky-600 rounded-full py-2 px-6">Voltar</a>
</h3>

    @include('includes.validations-form')
    <form action="/empresas" method="post">
        @include('_partials.form')
    </form>

@endsection


