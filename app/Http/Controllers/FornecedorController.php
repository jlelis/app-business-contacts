<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Estado;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $estados = Estado::all();
        $empresas = Empresa::all();
        $fornecedores = Fornecedor::all();

        return view('admin.fornecedor.index', compact('fornecedores', 'estados', 'empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::all();
        $empresas = Empresa::all();
        return view('admin.fornecedor.create', compact('empresas', 'estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        dd($data);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Fornecedor $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function show(Fornecedor $fornecedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Fornecedor $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estado = Estado::all();
        $fornecedor = Fornecedor::findOrFail($id);
        return view('admin.forncedores.edit', compact('fornecedor', 'estado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Fornecedor $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fornecedor $fornecedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Fornecedor $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fornecedor = Empresa::findOrfail($id);
        dd($fornecedor);
    }
}
