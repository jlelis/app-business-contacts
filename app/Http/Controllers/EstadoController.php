<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstadoRequest;
use App\Models\Estado;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = Estado::all();
//        dd($estados);
        return view('admin.estado.index', compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.estado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstadoRequest $request)
    {
        $estado = $request->all();
        Estado::create($estado);
        return redirect()->route('estados.index')
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
        $estado = Estado::findOrFail($id);
//        dd($data);
        return view('admin.estado.edit', compact('estado'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(EstadoRequest $request, $id)
    {
        $data = $request->all();
        $estados = Estado::find($id);
        $estados->update($data);

        return redirect()->route('estados.index')
            ->with('message', 'Cadastro alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estados = Estado::find($id);
        $estados->delete();

        return redirect()->route('estados.index')
            ->with('message', 'Cadastro excluido com sucesso');
    }
}
