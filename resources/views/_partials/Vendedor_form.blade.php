@csrf
        <input type="text" name="name" placeholder="Nome:" value="{{ $vendedor->name ?? old('name')}}"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
        <input type="text"  name="CPF" placeholder="CPF:" value="{{ $vendedor->CPF ?? old('CPF')}}"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
        <input type="text" name="Telefone" placeholder="Telefone:" value="{{ $vendedor->Telefone ?? old('Telefone')}}"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
        <input type="password" name="password" placeholder="Senha:"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
        <input type="file" name="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">

        <button type="submit" class="w-full shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
            Enviar
        </button>