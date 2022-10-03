<h1>Cadastro de empresa</h1>



@if ($errors->any())
<ul class='errors'>
    @foreach ($errors->all() as $error)
        <li class="error">{{ $error }}</li>
    @endforeach
</ul>

@endif
<div>
<form action="{{ route('home.store') }}" method="post">
@csrf
    <input type="text" name="name" placeholder="Nome:">
    <input type="text" name="CNPJ" placeholder="CNPJ:">
    <input type="text" name="Telefone" placeholder="Telefone:">
    <input type="password" name="password" placeholder="Senha:">
    
    <button type="submit">Enviar</button>
</form>

</div>