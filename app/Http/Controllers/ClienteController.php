<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Cliente::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Cliente::create([
            'nomeCompleto' => $request->input('nomeCompleto'),
            'cpf' => $request->input('cpf'),
            'dataDeNascimento' => $request->input('dataDeNascimento'),
        ]);;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Cliente::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return Cliente::find($id)->update([
            'nomeCompleto' => $request->input('nomeCompleto'),
            'cpf' => $request->input('cpf'),
            'dataDeNascimento' => $request->input('dataDeNascimento'),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Cliente::destroy($id);
    }
}
