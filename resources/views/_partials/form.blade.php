@csrf
        <input type="text" name="name" placeholder="Nome:" value="{{ $empresa->name ?? old('name')}}"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
        <input type="text" name="CNPJ" placeholder="CNPJ:" value="{{ $empresa->CNPJ ?? old('CNPJ')}}"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
        <input  type="text" onchange="telefone()" id="telefone" name="Telefone" placeholder="Telefone:" value="{{ $empresa->Telefone ?? old('Telefone')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
        <input type="password" name="password" placeholder="Senha:" inputmode= "numeric" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">

        <button type="submit" class="w-80 shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
            Enviar
        </button>

<script src="js/form-empresa.js"></script>




