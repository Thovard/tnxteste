@extends('layouts.app')

@section('content')
<div class="w-full h-10 bg-cyan-600	">
    <h1 class="
     text-center text-2xl">Cadastro de empresa</h1>


    <a href="/home" class=" absolute top-0 left-0
    bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-20">Voltar</a>

</div>

    @include('includes.validations-form')
    <form action="/empresas" method="post" class="tabela-cadastro">
        @include('_partials.form')
    </form>

@endsection
<script src="js/form-empresa.js"></script>

