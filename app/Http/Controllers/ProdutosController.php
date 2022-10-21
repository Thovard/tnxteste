<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateEmpresasFormRequest;
use App\Http\Requests\StoreUpdateProdutosFormRequest;
use App\Models\Empresas;
use App\Models\Produtos;
use App\Models\Vendedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
     
      if ($request->image) {
        $data['image'] = $request->image->store('produtos');

        
      }
     
       
       $this->produtos->create($data);


       return redirect()->route('empresa.show', $empresa->id);
    }
    public function index($id, Empresas $empresa)     {
        $empresa = DB::table('Produtos')->where('id', '=', $id)->get('empresas_id');
        $empresa = $empresa[0]->empresas_id;
        $empresa = DB::table('empresas')->where('id', '=', $empresa)->get();
        $empresa = $empresa[0];

        if (!$produtos = $this->produtos->find($id))
        return redirect()->route('empresa.index', $empresa->id);
       
        return view('produto.index', compact('empresa', 'id', 'produtos'));
    }

    public function edit_produto($id)
    {
        $empresa = $this->empresa->find($id);
        if (!$produtos = $this->produtos->find($id))
           return redirect()->route('home.index');
            
        return view('produto.edit', compact('produtos', 'empresa'));
    }

    public function update_produto(Request $request, $id, Empresas $empresa, Produtos $produtos)
    {

        if (!$produtos = $this->produtos->find($id))
        return redirect()->route('home.index');
        
        $data = $request->only('name','Categoria');
        if ($request->image) {
            if( $produtos->image && Storage::exists($produtos->image)) {
                Storage::delete($produtos->image);
            $data['image'] = $request->image->store('produtos');
          }
        }
        $produtos->update($data);
        

      return redirect()->route('produto.index', $produtos->id);
        
    }
    public function delete_produto($id)
    {
        $empresa = DB::table('Produtos')->where('id', '=', $id)->get('empresas_id');
        $empresa = $empresa[0]->empresas_id;
        $empresa = DB::table('empresas')->where('id', '=', $empresa)->get();
        $empresa = $empresa[0];
       
       

        if (!$produtos = $this->produtos->find($id))
            return redirect()->route('home.index');
            Storage::delete($produtos->image);
        $produtos->delete();


        return redirect()->route('empresa.show', $empresa->id);
    }

}
