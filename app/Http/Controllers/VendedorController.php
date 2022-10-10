<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateVendedorFormRequest;
use App\Models\{
    Empresas,
    Vendedor
};

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class VendedorController extends Controller
{

    protected $empresa;
    protected $vendedor;

    public function __construct(Vendedor $vendedor, Empresas $empresa)
    {
        $this->vendedor = $vendedor;
        $this->empresa = $empresa;

    }
public function index($id, Empresas $empresa,Vendedor $vendedor)
    {
        $idempres = DB::table('vendedores')->where('id', '=', $id)->get('empresas_id');
        $idempresa = $idempres[0]->empresas_id;
        $empresa = DB::table('empresas')->where('id', '=', $idempresa )->get();
        $name = $empresa[0]->name;
        $empresaid = $empresa[0]->id;

       // dd($id);

        if (!$vendedor = $this->vendedor->find($id))
        return redirect()->route('empresa.index', $empresa->id);

        return view('vendedores.index', compact('vendedor', 'empresa', 'name','id', 'empresaid'));
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
        if ($request->image) {
            $data['image'] = $request->image->store('vendedores');
          }
        $this->vendedor->create($data);


        return redirect()->route('empresa.show', $empresa->id);
    }
    public function delete_vendedor($id)
    {
        $empresa = DB::table('vendedores')->where('id', '=', $id)->get('empresas_id');
        $empresa = $empresa[0]->empresas_id;
        $empresa = DB::table('empresas')->where('id', '=', $empresa )->get();
        $empresa = $empresa[0];



        if (!$vendedor = $this->vendedor->find($id))
            return redirect()->route('home.index');
            Storage::delete($vendedor->image);
        $vendedor->delete();
        return redirect()->route('empresa.show', $empresa->id);
    }
    public function edit_vendedor($id)
    {

        //dd('ta indo');
        
        if (!$vendedor = $this->vendedor->find($id))
           return redirect()->route('home.index');
            
        return view('vendedores.edit', compact('vendedor'));
    }

    public function update_vendedor(Request $request, $id,Vendedor $vendedor, Empresas $empresa)
    {
        
        if (!$vendedor = $this->vendedor->find($id))
        return redirect()->route('home.index');
        
        $data = $request->only('name','CPF','Telefone');
        if ($request->password)
        $data['password'] = bcrypt($request->password);

        if ($request->image) {
           if( $vendedor->image && Storage::exists($vendedor->image)) {
                Storage::delete($vendedor->image);
           }

            $data['image'] = $request->image->store('vendedores');
          }
        $vendedor->update($data);
        

      return redirect()->route('vendedor.index', $vendedor->id);
        
    }

}
