<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $pais) : Response
    {
        return new Response(
            Departamento::where('pais_id', $pais)
                            ->orderBy('nombre', 'asc')
                            ->get(),
                            Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Departamento $departamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departamento $departamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departamento $departamento)
    {
        //
    }
}
