@extends('layouts.app')

@section('content')

<h1 
class="text-center text-3xl font-semibold leading-tigh py-2 text-decoration: underline">
    Editando a Empresa: 
    {{ $vendedor->name }}

</h1>


@if($errors->any())
    <ul class='errors'>
        @foreach($errors->all() as $error)
        <li class="error">{{ $error }}</li>
        @endforeach
    </ul>

    @endif
<div class="w-full bg-white shadow-md rounded px-8 py-12"> 
    <form action="{{ route('vendedor.update', $vendedor->id) }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            @include('_partials.Vendedor_form')
    </form>
    </div>



@endsection


