<h1 class="text-2xl font-semibold leading-tigh py-2 text-decoration: underline">Editando a empresa {{ $empresa->name }}</h1>




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
        @csrf
        <input type="text" name="name" placeholder="Nome:" value="{{ $empresa->name}}"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
        <input type="text" name="CNPJ" placeholder="CNPJ:" value="{{ $empresa->CNPJ}}"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
        <input type="text" name="Telefone" placeholder="Telefone:" value="{{ $empresa->Telefone }}"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
        <input type="password" name="password" placeholder="Senha:"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">

        <button type="submit" class="w-full shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Enviar</button>
    </form>
</div>

