@extends('layouts.app')

@section('content')

<div class="w-full h-10 bg-cyan-600	">
    <h1 class="
     text-center text-2xl">Cadastro de Vendedor da Empresa: {{ $empresa->name}}</h1>
<a href="{{ route('empresa.show', $empresa->id)}}" class=" absolute top-0 left-0
    bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-20">Voltar</a>

</div>


@if($errors->any())
    <ul class='errors'>
        @foreach($errors->all() as $error)
        <li class="error">{{ $error }}</li>
        @endforeach
    </ul>

    @endif

    <form action="{{ route('produto.update', $produtos->id) }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            @include('_partials.Produtos_form')
    </form>
 



@endsection


