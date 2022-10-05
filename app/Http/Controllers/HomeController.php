<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateEmpresasFormRequest;
use App\Models\Empresas;
use App\Models\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    protected $model;

    public function __construct(Empresas $empresa)
    {
        $this->model = $empresa;
    }
    

    public function index(Request $request)
    {
        $empresa = 
        $this->model->where('name', 'LIKE', "%{$request->search}%")
        ->get();

        
        return view('home.index', compact('empresa'));
    }
    public function create_empresa()
    {
      
        
        return view('home.empresa.cadastroEmpresa');
    }
    public function show($id)
    {

        //dd('teste');
        
        if (!$empresa = $this->model->find($id))
            return redirect()->route('home.index');

        return view('home.empresa.EmpresaHome', compact('empresa'));
    }
    public function create()
    {
        
        //dd('create');
        return view('home.empresa.cadastroEmpresa');
    }
    public function store(StoreUpdateEmpresasFormRequest $request)
    {
            
        // dd($request->all());

        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $this->model->create($data);

        return redirect()->route('home.index');
    }
}
