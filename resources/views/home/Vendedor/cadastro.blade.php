@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-semibold leading-tigh py-2">Cadastro de empresa</h1>






    <form action="{{ route('home.store-vendedor') }}" method="post">
@include('_partials.Vendedor_form')
</form>



@endsection