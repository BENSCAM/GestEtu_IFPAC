<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\FiliereRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $filieres = Filiere::paginate();

        return view('filiere.index', compact('filieres'))
            ->with('i', ($request->input('page', 1) - 1) * $filieres->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $filiere = new Filiere();

        return view('filiere.create', compact('filiere'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FiliereRequest $request): RedirectResponse
    {
        Filiere::create($request->validated());

        return Redirect::route('filiere.index')
            ->with('success', 'Filiere created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $filiere = Filiere::find($id);

        return view('filiere.show', compact('filiere'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $filiere = Filiere::find($id);

        return view('filiere.edit', compact('filiere'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FiliereRequest $request, Filiere $filiere): RedirectResponse
    {
        $filiere->update($request->validated());

        return Redirect::route('filiere.index')
            ->with('success', 'Filiere updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Filiere::find($id)->delete();

        return Redirect::route('filiere.index')
            ->with('success', 'Filiere deleted successfully');
    }
}
