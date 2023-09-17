<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Rel;
use App\Models\Turma;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Rel $rel)
    {
        $turmas = Turma::all();
        $alunos = Aluno::all();

        return Inertia::render('sala/CadastroSala', [
            'turmas' => $turmas,
            'alunos' => $alunos,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rel $rel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, rel $rel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rel $rel)
    {
        //
    }
}
