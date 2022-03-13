<?php

namespace App\Http\Controllers;

use App\Models\Applicator;
use Illuminate\Http\Request;
use Exception;

class ApplicatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'data' => Applicator::all()
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
            Applicator::create($request->all());

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
    public function show($applicator)
    {
        try {
            return response()->json([
                'data' =>
                ['message' => Applicator::findOrFail($applicator)]
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
    public function edit(Applicator $applicator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update($applicator, Request $request)
    {
        try {

            $applicator = Applicator::find($applicator);

            $applicator->update($request->all());
            
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
    public function destroy($applicator)
    {
        try {

            $applicator = Applicator::find($applicator);

            $applicator->delete();

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
