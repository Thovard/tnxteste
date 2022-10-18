<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use App\Models\Produtos;
use App\Models\Vendedor;
use App\Models\vendas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    protected $empresa;
    protected $vendedor;
    protected $produtos;

    public function __construct(Vendedor $vendedor, Empresas $empresa, Produtos $produtos)
    {
        $this->vendedor = $vendedor;
        $this->empresa = $empresa;
        $this->produtos = $produtos;

    }

    public function index(Request $request)
    {
   
        $empresa = 
        $this->empresa->where('name', 'LIKE', "%{$request->search}%")
        ->get();
        
        return view('home.index', compact('empresa'));
    }

    public function teste()
    {
        
        return view('home.teste', );
    }
    public function vendas() {
        $empresa = 
        $this->empresa->get();
        //dd($empresa);

        $vendedor = 
        $this->vendedor->get();
        
        $produtos = 
        $this->produtos->get();

        
        

        return view('home.vendas', compact('empresa', 'vendedor', 'produtos'));
    }
    public function store(Request $resquest)
    {
       $vendedor = ["dados" => Vendedor::where("empresas_id", $resquest->op)->get(),
            "resposta" => true
    ];

        return json_encode($vendedor);
   


    //  $teste = [
    //    "resposta" => true
    //  ];
    //  return json_encode($teste);
    }
    

}