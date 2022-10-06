<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
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
    
    public function create()
    {
        return view('home.empresa.cadastroEmpresa');
    }
}
