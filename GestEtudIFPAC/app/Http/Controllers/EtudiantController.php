<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EtudiantRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $etudiants = Etudiant::paginate();

        return view('etudiant.index', compact('etudiants'))
            ->with('i', ($request->input('page', 1) - 1) * $etudiants->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $etudiant = new Etudiant();

        return view('etudiant.create', compact('etudiant'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EtudiantRequest $request): RedirectResponse
    {
        Etudiant::create($request->validated());

        return Redirect::route('etudiant.index')
            ->with('success', 'Etudiant created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $etudiant = Etudiant::find($id);

        return view('etudiant.show', compact('etudiant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $etudiant = Etudiant::find($id);

        return view('etudiant.edit', compact('etudiant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EtudiantRequest $request, Etudiant $etudiant): RedirectResponse
    {
        $etudiant->update($request->validated());

        return Redirect::route('etudiant.index')
            ->with('success', 'Etudiant updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Etudiant::find($id)->delete();

        return Redirect::route('etudiant.index')
            ->with('success', 'Etudiant deleted successfully');
    }
}
