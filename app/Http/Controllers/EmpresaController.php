<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Estado;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = Estado::all();
        $empresas = Empresa::with('estado')->get();
//        dd($empresas);
        return view('admin.empresa.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::all();
        return view('admin.empresa.create', compact('estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Empresa::create($request->all());
        return redirect()->route('empresas.index')
            ->with('message', 'Cadastro criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresa::findOrfail($id);
//        dd($empresa);
        $estados = Estado::all();
        return view('admin.empresa.edit', compact('empresa', 'estados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empresa = Empresa::findOrFail($id);
//        dd($request->all());
        $empresa->update($request->all());
        return redirect()->route('empresas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa = Empresa::findOrfail($id);
        dd($empresa);
    }
}
