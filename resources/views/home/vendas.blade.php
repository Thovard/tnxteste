@extends('layouts.app')

@section('content')

<div class="grid grid-cols-3 grid-rows-2 ">
    <div class="
    order-2 
    text-center absolute top-2 right-9 left-2  h-auto w-auto ">
        <h1 class="text-center text-3xl font-semibold leading-tigh py-2">Central de Vendas</h1>
    </div>
    <div class=" order-1">
        <a href="#"
            class=" absolute top-3 left-3 h-auto w-auto text-base text-reigth bg-green-200 hover:bg-green-500 rounded-full py-1 px-8">Historico
            de Vendas</a>
    </div>

    <div class="order-3 text-right border-3 ">
        <a href="{{ route('home.index') }}"
            class=" absolute top-3 right-3 h-auto w-auto text-base text-reigth bg-green-200 hover:bg-green-500 rounded-full py-1 px-8">Acessar
            Empresa</a>
    </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class=" order-4 col-span-3">
                    <form action="#" method="post" enctype="multipart/form-data">                    
                    @csrf




                    <select name="empresa">
                        @foreach ($empresa as $empresas)
                        <option value="{{$empresas->id}}">{{$empresas->name}}</option>
                        @endforeach
                    </select>
                    <select name="vendedor" >
                        @foreach ($vendedor as $vendedor)
                            <option value="{{$vendedor->name}}">{{$vendedor->name}}</option>
                        @endforeach
                    </select>
                    <select name="produto" >
                        @foreach ($produtos as $produtos)
                            <option value="{{$produtos->name}}">{{$produtos->name}}</option>
                        @endforeach
                    </select>






                </form>


        </div>
    </div>    

    @endsection
