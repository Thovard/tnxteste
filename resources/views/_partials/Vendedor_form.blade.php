@csrf

<div class=" 
grid grid-rows-6 grid-cols-4
flex">
    <input type="text" name="name" id="name" placeholder="Nome:" value="{{ $vendedor->name ?? old('name') }}" class="grid col-start-2 col-end-4 shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <input type="text" name="CPF" id="CPF" placeholder="CPF:" value="{{ $vendedor->CPF ?? old('CPF') }}" class="grid row-start-2 row-end-2 grid col-start-2 col-end-4 shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <input type="text" id="telefone" name="Telefone" placeholder="Telefone:" value="{{ $vendedor->Telefone ?? old('Telefone') }}" class=" grid row-start-3 row-end-3 grid col-start-2 col-end-4 shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <input type="password" name="password"id="password" placeholder="Senha:" inputmode="numeric" class=" grid row-start-4 row-end-4 grid col-start-2 col-end-4 shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <input type="file" name="image" class=" grid row-start-5 row-end-5 grid col-start-2 col-end-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <div class="grid row-start-6 row-end-6 col-start-3 col-end-5 ">

        <button type="submit" id="comprar" class=" w-3/12 right-3/12 grid row-start-6 row-end-6 col-start-3 col-end-5 button-cadastro absolute shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
            Enviar
        </button>
    </div>
</div><br>
