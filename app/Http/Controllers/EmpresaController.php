<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function edit($id)
    {
    if (!$empresa = Empresas::find($id))
    return redirect()->route('home.index');



        return view('home.empresa.edit', compact('empresa'));
    }

    public function update(Request $request, $id)
    {

    if (!$empresa = Empresas::find($id))
        return redirect()->route('home.index');

        $data = $request->only('name','CNPJ','Telefone');
        if ($request->password)
            $data['password'] = bcrypt($request->password);

        $empresa->update($data);

        return redirect()->route('home.index');
        
    }
}
