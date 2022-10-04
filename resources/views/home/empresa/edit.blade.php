@extends('layouts.app')

@section('content')

<h1 
class="text-center text-3xl font-semibold leading-tigh py-2 text-decoration: underline">
    Editando a Empresa: 
    {{ $empresa->name }}
    <button type="submit" 
    class="absolute top-3 right-12 h-auto w-auto shadow bg-purple-500 hover:bg-purple-400 text-sm focus:shadow-outline focus:outline-none text-white font-bold py-2 px-2 rounded ">
    Deletar Empresa
</button>
</h1>


@if($errors->any())
    <ul class='errors'>
        @foreach($errors->all() as $error)
        <li class="error">{{ $error }}</li>
        @endforeach
    </ul>

    @endif
<div class="w-full bg-white shadow-md rounded px-8 py-12">
    <form action="{{ route('empresa.update', $empresa->id) }}" method="post">
            <input type="hidden" name="_method" value="PUT">
            @include('_partials.form')
    </form>
    </div>

<div >
    <form action="{{ route('emrpesa.delete', $empresa->id) }}" method="POST">
                @method('DELETE')
                @csrf
                    

    </form>
    </div>



@endsection


