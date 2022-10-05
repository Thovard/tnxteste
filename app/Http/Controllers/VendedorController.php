<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateVendedorFormRequest;
use App\Models\Empresas;
use App\Models\Vendedor;
use Illuminate\Http\Request;

class VendedorController extends Controller
{

    protected $model;

    public function __construct(Vendedor $vendedor)
    {
        $this->model = $vendedor;

    
    }
    public  function index()
    {
        dd('teste');
    }

    public function create_vendedor(Empresas $empresa)
    {
      
        
        return view('home.Vendedor.cadastro');
    }
    public function store_vendedor(StoreUpdateVendedorFormRequest $request)
    {
            
       // dd($request->all());

        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $this->model->create($data);

        return redirect()->route('home.index');
    }
}
