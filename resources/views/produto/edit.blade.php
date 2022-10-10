@extends('layouts.app')

@section('content')

<h1 
class="text-center text-3xl font-semibold leading-tigh py-2 text-decoration: underline">
    Editando a Empresa: 
    {{ $produtos->name }}
    <a href="{{ route('produto.index', $produtos->id)}}" class=" absolute top-2 left-1 h-auto w-auto text-sm text-reigth bg-green-200 hover:bg-green-500 rounded-full py-2 px-8">Voltar</a>

</h1>


@if($errors->any())
    <ul class='errors'>
        @foreach($errors->all() as $error)
        <li class="error">{{ $error }}</li>
        @endforeach
    </ul>

    @endif
<div class="w-full bg-white shadow-md rounded px-8 py-12">
    <form action="{{ route('produto.update', $produtos->id) }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            @include('_partials.Produtos_form')
    </form>
    </div>



@endsection


