<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateEmpresasFormRequest;
use App\Models\{
    Empresas,
    Vendedor
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{

    protected $empresa;
    protected $vendedor;

    public function __construct(Vendedor $vendedor, Empresas $empresa)
    {
        $this->vendedor = $vendedor;
        $this->empresa = $empresa;

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

       

        
           
        return view('empresas.EmpresaHome', compact('empresa', 'vendedor'));
    }

    // POST - create empresa
    public function store(StoreUpdateEmpresasFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $this->empresa->create($data);

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
        return redirect()->route('home.index');
    }

}
