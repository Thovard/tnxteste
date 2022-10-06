<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateEmpresasFormRequest;
use App\Models\Empresas;
use Illuminate\Http\Request;
class EmpresaController extends Controller
{

    protected $model;

    public function __construct(Empresas $empresa)
    {
        $this->model = $empresa;
    }
    
    // GET - Central de empresas
    public function create_empresa()
    {
        return view('empresas.cadastroEmpresa');
    }

    // GET - Detalhamento da empresa
    public function show($id)
    {
        if (!$empresa = $this->model->find($id))
            return redirect()->route('home.index');

        return view('empresas.EmpresaHome', compact('empresa'));
    }

    // POST - create empresa
    public function store(StoreUpdateEmpresasFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $this->model->create($data);

        return redirect()->route('home.index');
    }
    
    public function edit($id)
    {
        if (!$empresa = $this->model->find($id))
            return redirect()->route('home.index');
            
        return view('empresas.edit', compact('empresa'));
    }

    public function update(Request $request, $id,Empresas $empresa)
    {

    if (!$empresa = $this->model->find($id))
        return redirect()->route('home.index');

        $data = $request->only('name','CNPJ','Telefone');
        if ($request->password)
            $data['password'] = bcrypt($request->password);

        $empresa->update($data);

        return redirect()->route('empresa.show', $empresa->id);
        
    }

    public function delete($id)
    {
        //dd('Passou por aqui');
        if (!$empresa = $this->model->find($id))
            return redirect()->route('home.index');

        $empresa->delete();
        return redirect()->route('home.index');
    }
}
