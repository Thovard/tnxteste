@csrf
<div class=" 
grid grid-rows-6 grid-cols-4
flex">
        <input type="text" name="name" placeholder="Nome:" value="{{ $produtos->name ?? old('name')}}" class="grid col-start-2 col-end-4 shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
        <input type="text" name="Categoria" placeholder="Categoria:" value="{{ $produtos->Categoria ?? old('Categoria')}}" class="grid row-start-2 row-end-2 grid col-start-2 col-end-4 shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
        <input type="file" name="image" class=" grid row-start-3 row-end-3 grid col-start-2 col-end-4 shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
        <div class="grid row-start-4 row-end-4 grid col-start-2 col-end-4  ">

            <button type="submit" id="comprar" class=" w-3/12 right-3/12 grid row-start-6 row-end-6 col-start-3 col-end-5 button-cadastro absolute shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                Enviar
            </button>