@extends('layouts.app')

@section('content')

<h1>Cadastro de empresa</h1>

<h3>
    <a href="Back">Voltar</a>
</h3>

@include('includes.validations-form')


    <form action="{{ route('home.store') }}" method="post">
@include('_partials.form')
</form>



@endsection


