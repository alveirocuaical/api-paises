<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : Response
    {
        return new Response(Pais::all(), Response::HTTP_OK);
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
    public function show(Pais $pais)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pais $pais)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pais $pais)
    {
        //
    }
}
