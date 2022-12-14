<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateEmpresasFormRequest;
use App\Models\{
    Empresas,
    Vendedor,
    Produtos
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmpresaController extends Controller
{

    protected $empresa;
    protected $vendedor;
    protected $produtos;

    public function __construct(Vendedor $vendedor, Empresas $empresa, Produtos $produtos)
    {
        $this->vendedor = $vendedor;
        $this->empresa = $empresa;
        $this->Produtos = $produtos;
      }
    
    // GET - Central de empresas
    public function create_empresa()
    {
        return view('empresas.cadastroEmpresa');
    }

    // GET - Detalhamento da empresa
    public function show($id)
    {
        
        if (!$empresa = $this->empresa->find($id))
            return redirect()->route('home.index');


            //$vendedor = DB::table('vendedores')->get();

        $vendedor = $empresa->vendedor()->get();
        $produtos = $empresa->produtos()->get();


        
           
        return view('empresas.EmpresaHome', compact('empresa', 'vendedor', 'produtos'));
    }

    // POST - create empresa
    public function store(Request $request)
    {
        
          $a =    DB::table('empresas') -> insert([
                'name' => $request->name ,
                'CNPJ' => $request->cnpj ,
                'Telefone' => $request -> telefone ,
                'cep' => $request -> cep ,
                'estado' => $request -> estado ,
                'cidade' => $request -> cidade ,
                'bairro' => $request -> bairro ,
                'Numero' => $request -> numero ,
                'password' => Hash::make($request -> password)  
            ]); 

           
            
      
            return redirect()->route('home.index');

    }
    
    public function edit($id)
    {
        if (!$empresa = $this->empresa->find($id))
            return redirect()->route('home.index');
            
        return view('empresas.edit', compact('empresa'));
    }

    public function update(Request $request, $id,Empresas $empresa)
    {

    if (!$empresa = $this->empresa->find($id))
        return redirect()->route('home.index');

        $data = $request->only('name','CNPJ','Telefone');
        if ($request->password)
            $data['password'] = bcrypt($request->password);

        $empresa->update($data);

        return redirect()->route('empresa.show', $empresa->id)->with('success','Empresa atualizada com sucesso');
        
    }

    public function delete($id)
    {
        //dd('Passou por aqui');
        if (!$empresa = $this->empresa->find($id))
            return redirect()->route('home.index');

        $empresa->delete();
        return redirect()->route('empresa.show', $empresa->id);
    }

}
