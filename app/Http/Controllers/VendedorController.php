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
public function index($id, Empresas $empresa)
    {
        if (!$vendedor = $this->vendedor->find($id))
        return redirect()->route('empresa.index', $empresa->id);

        return view('vendedores.index', compact('vendedor'));
    }

    public function create_vendedor($empresaId)
    {

        if (!$empresa = $this->empresa->find($empresaId))   {
            return redirect()->back();
        }

        return view('vendedores.cadastro', compact('empresa'));
    }

    public function store_vendedor( StoreUpdateVendedorFormRequest $request ,$empresaId)
    {
        
        if (!$empresa = $this->empresa->find($empresaId))   {
            return redirect()->back();
        }
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $data['empresas_id'] = $empresaId;

        $this->vendedor->create($data);


        return redirect()->route('empresa.show', $empresa->id);
    }
}
