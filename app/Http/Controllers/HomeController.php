<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateEmpresasFormRequest;
use App\Models\Empresas;
use App\Models\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
        protected $model;
    public function index()
    {
            
        $empresa = Empresas::get();

      //dd($empresa);
        
        return view('home.index', compact('empresa'));
    }
    public function create_empresa()
    {
      
        
        return view('home.empresa.cadastroEmpresa');
    }
    public function show($id)
    {
        
       // dd($id);
        return view('home.empresa.EmpresaHome');
    }
    public function create()
    {
        //dd('create');
        return view('home.empresa.cadastroEmpresa');
    }
    public function store(StoreUpdateEmpresasFormRequest $request)
    {
        //dd($request->all());

        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        Empresas::create($data);

        return redirect()->route('home.index');
    }
}
