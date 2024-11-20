<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PaiementRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $paiements = Paiement::paginate();

        return view('paiement.index', compact('paiements'))
            ->with('i', ($request->input('page', 1) - 1) * $paiements->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $paiement = new Paiement();

        return view('paiement.create', compact('paiement'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PaiementRequest $request): RedirectResponse
    {
        Paiement::create($request->validated());

        return Redirect::route('paiements.index')
            ->with('success', 'Paiement created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $paiement = Paiement::find($id);

        return view('paiement.show', compact('paiement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $paiement = Paiement::find($id);

        return view('paiement.edit', compact('paiement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PaiementRequest $request, Paiement $paiement): RedirectResponse
    {
        $paiement->update($request->validated());

        return Redirect::route('paiements.index')
            ->with('success', 'Paiement updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Paiement::find($id)->delete();

        return Redirect::route('paiements.index')
            ->with('success', 'Paiement deleted successfully');
    }
}
