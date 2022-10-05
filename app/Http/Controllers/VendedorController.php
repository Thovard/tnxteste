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

    protected $model;

    public function __construct(Vendedor $vendedor, Empresas $empresa)
    {
        $this->vendedor = $vendedor;
        $this->empresa = $empresa;

    
    }
    public  function index()
    {
        dd('teste');
    }

    public function create_vendedor()
    {
      
        
        return view('home.Vendedor.cadastro');
    }
    public function store_vendedor(StoreUpdateVendedorFormRequest $request)
    {
            
       dd($request->all());

        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $this->vendedor->create($data);

        return redirect()->route('home.index');
    }
}
