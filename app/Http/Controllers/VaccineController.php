<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;
use Exception;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'data' => Vaccine::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            Vaccine::create($request->all());

            return response()->json([
                'data' =>
                ['message' => 'Registro criado com sucesso!']
            ]);
        } catch (Exception $e) {

            return response()->json([
                'data' =>
                ['message' => 'Erro ao cadastrar registro!']
            ]);
        }
    }

    /**
     * Display the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function show($vaccine)
    {
        try {
            return response()->json([
                'data' =>
                ['message' => Vaccine::findOrFail($vaccine)]
            ]);
        } catch (Exception $e) {
            return response()->json([
                'data' =>
                ['message' => 'Erro ao visualizar registro!']
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaccine $vaccine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update($vaccine, Request $request)
    {
        try {

            $vaccine = Vaccine::find($vaccine);

            $vaccine->update($request->all());
            
            return response()->json([
                'data' =>
                ['message' => 'Registro atualizado com sucesso!']
            ]);
        } catch (Exception $e) {
            return response()->json([
                'data' =>
                ['message' => 'Erro ao atualizar registro!']
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     * @return \Illuminate\Http\Response
     */
    public function destroy($vaccine)
    {
        try {

            $vaccine = Vaccine::find($vaccine);

            $vaccine->delete();

            return response()->json([
                'data' =>
                ['message' => 'Registro excluído com sucesso!']
            ]);
        } catch (Exception $e) {
            return response()->json([
                'data' =>
                ['message' => 'Erro ao excluir registro!']
            ]);
        }
    }
}
