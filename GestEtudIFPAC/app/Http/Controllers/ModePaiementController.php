<?php

namespace App\Http\Controllers;

use App\Models\ModePaiement;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ModePaiementRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ModePaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $modePaiements = ModePaiement::paginate();

        return view('mode-paiement.index', compact('modePaiements'))
            ->with('i', ($request->input('page', 1) - 1) * $modePaiements->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $modePaiement = new ModePaiement();

        return view('mode-paiement.create', compact('modePaiement'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ModePaiementRequest $request): RedirectResponse
    {
        ModePaiement::create($request->validated());

        return Redirect::route('mode-paiements.index')
            ->with('success', 'ModePaiement created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $modePaiement = ModePaiement::find($id);

        return view('mode-paiement.show', compact('modePaiement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $modePaiement = ModePaiement::find($id);

        return view('mode-paiement.edit', compact('modePaiement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ModePaiementRequest $request, ModePaiement $modePaiement): RedirectResponse
    {
        $modePaiement->update($request->validated());

        return Redirect::route('mode-paiements.index')
            ->with('success', 'ModePaiement updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        ModePaiement::find($id)->delete();

        return Redirect::route('mode-paiements.index')
            ->with('success', 'ModePaiement deleted successfully');
    }
}
