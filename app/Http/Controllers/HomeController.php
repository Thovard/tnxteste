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
    protected $vendas;
    protected $empresa;
    protected $vendedor;
    protected $produtos;

    public function __construct(Vendedor $vendedor, Empresas $empresa, Produtos $produtos, vendas $vendas)
    {
        
        $this->vendas = $vendas;
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
    public function store(Request $request)
    {
        DB::table('vendas') -> insert([
            'Empresa' => $request -> empresa,
            'Vendedor' => $request -> vendedor,
            'produto' => $request -> produto
        ]);


        return json_encode($resposta = [
            "resposta" => 'foi!'
        ] );
         
 
    }
    
    public function selects(Request $request) {
        $vendedor = ["vendedor" => Vendedor::where("empresas_id", $request->op)->get(),
        "resposta" => true,
    "produtos"  => Produtos::where("empresas_id", $request->op)->get(), 
        
];

return json_encode($vendedor);

    }

public function historico() {

    $vendas = $this->vendas->get();
    
    //$vendas = vendas::whereIn('id', $vendas)->get();
    $result = [];
     
    foreach ($vendas as $venda ) {
        $a['empresa'] =   $this->empresa->where('id', '=',$venda->Empresa)->first();
        $a['vendedor'] = $this->vendedor->where('id' ,'=',$venda->Vendedor)->first();
        $a['produto'] = $this->produtos->where('id' ,'=',$venda->produto)->first();
        array_push($result, $a);
    };
 
    

    
     
    
    return view('home.historico', compact('result'));
}





}
