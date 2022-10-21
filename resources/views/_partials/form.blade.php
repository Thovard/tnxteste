@csrf
<div class=" 
grid grid-rows-4 grid-cols-4
flex flex-col">
    <input type="text" name="name" placeholder="Nome:" value="{{ $empresa->name ?? old('name') }}" class="grid col-start-2 col-end-4 shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <input type="text" name="CNPJ" id="cnpj" placeholder="CNPJ:" value="{{ $empresa->CNPJ ?? old('CNPJ') }}" class="grid row-start-2 row-end-2 grid col-start-2 col-end-4 shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <input type="text" onchange="telefone()" id="telefone" name="Telefone" placeholder="Telefone:" value="{{ $empresa->Telefone ?? old('Telefone') }}" class=" grid row-start-3 row-end-3 grid col-start-2 col-end-4 shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <input type="password" name="password" placeholder="Senha:" inputmode="numeric" class=" grid row-start-4 row-end-4 grid col-start-2 col-end-4 shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
</div><br>
<div class="w-full h-10 bg-cyan-600">
    <h2 class=" text-center text-3xl text-white">Endereço da Empresa</h2>
</div>

<div class=" flex grid grid-cols-8 grid-rows-6 endereço">
    <input type="text" id="cep" class=" grid col-start-3 col-end-7 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 text-center leading-tight focus:outline-none focus:shadow-outline my-2" placeholder="00000-000" onkeypress=" return Onlynumbers(event)" autofocus maxlength="9">
    <input type="text" id="uf" placeholder="Estado" disabled class=" grid row-start-2 row-end-2 col-start-3 col-end-7 shadow appearance-none border rounded w-full py-2 px-3 text-black-400 text-center leading-tight focus:outline-none focus:shadow-outline my-2">
    <input type="text" id="cidade" placeholder="cidade" disabled class="grid row-start-3 row-end-3 col-start-3 col-end-7 shadow appearance-none border rounded w-full py-2 px-3 text-black-400 text-center leading-tight focus:outline-none focus:shadow-outline my-2">
    <input type="text" id="bairro" placeholder="bairro" disabled class="grid row-start-4 row-end-4 col-start-3 col-end-7 shadow appearance-none border rounded w-full py-2 px-3 text-black-400 text-center leading-tight focus:outline-none focus:shadow-outline my-2">
    <input type="text" id="numero" placeholder="Nº da Empresa" disabled class="clear grid row-start-5 row-end-5 col-start-3 col-end-7 shadow appearance-none border rounded w-full py-2 px-3 text-black-700 text-center leading-tight focus:outline-none focus:shadow-outline my-2">



    <div class="grid row-start-6 row-end-6 col-start-5 col-end-7 ">

        <button type="submit" class=" w-3/12 right-3/12 grid row-start-6 row-end-6 col-start-3 col-end-5 button-cadastro absolute shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
            Enviar
        </button>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<script src="https://rawgit.com/RobinHerbots/Inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
<script src="{{ asset('js/form-empresa.js') }}"></script>