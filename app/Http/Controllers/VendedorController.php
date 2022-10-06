<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateVendedorFormRequest;
use App\Models\{
    Empresas,
    Vendedor
};

use Illuminate\Http\Request;

class VendedorController extends Controller
{

    protected $empresa;
    protected $vendedor;

    public function __construct(Vendedor $vendedor, Empresas $empresa)
    {
        $this->vendedor = $vendedor;
        $this->empresa = $empresa;

    
    }

    public function create_vendedor(Empresas $empresa, $id)
    {
        if(!$empresa = $this->empresa->find($id)){
            return redirect()->back();
        }
        
        return view('vendedores.cadastro', compact('empresa'));
    }

    public function store_vendedor(Empresas $empresa, StoreUpdateVendedorFormRequest $request)
    {
        $data = $request->all();

        $data['password'] = bcrypt($request->password);

       // $data['empresa_id'] = $empresaid;

        $this->vendedor->create($data);

        return redirect()->route('home.index'); // redirect to -> empresas/empresaid
    }
}
