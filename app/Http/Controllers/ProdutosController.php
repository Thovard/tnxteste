<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateEmpresasFormRequest;
use App\Http\Requests\StoreUpdateProdutosFormRequest;
use App\Models\Empresas;
use App\Models\Produtos;
use App\Models\Vendedor;
use Illuminate\Http\Request;

class ProdutosController extends Controller
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
    public function ceate_produto($empresaId)
    {

     //   dd('teste');

       if (!$empresa = $this->empresa->find($empresaId))   {
           return redirect()->back();
       }

      return view('produto.create', compact('empresa'));
    }

    public function store_produto( StoreUpdateProdutosFormRequest $request ,$empresaId)
    {

    
        
       if (!$empresa = $this->empresa->find($empresaId))   {
           return redirect()->back();
       }
       $data = $request->all();

       $data['empresas_id'] = $empresaId;
     
      // dd($data);
       
       $this->produtos->create($data);


       return redirect()->route('empresa.show', $empresa->id);
    }
}
