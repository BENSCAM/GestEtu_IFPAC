<?php

namespace App\Http\Controllers;

use App\Models\Inscrire;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\InscrireRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class InscrireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $inscrires = Inscrire::paginate();

        return view('inscrire.index', compact('inscrires'))
            ->with('i', ($request->input('page', 1) - 1) * $inscrires->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $inscrire = new Inscrire();

        return view('inscrire.create', compact('inscrire'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InscrireRequest $request): RedirectResponse
    {
        Inscrire::create($request->validated());

        return Redirect::route('inscrires.index')
            ->with('success', 'Inscrire created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $inscrire = Inscrire::find($id);

        return view('inscrire.show', compact('inscrire'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $inscrire = Inscrire::find($id);

        return view('inscrire.edit', compact('inscrire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InscrireRequest $request, Inscrire $inscrire): RedirectResponse
    {
        $inscrire->update($request->validated());

        return Redirect::route('inscrires.index')
            ->with('success', 'Inscrire updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Inscrire::find($id)->delete();

        return Redirect::route('inscrires.index')
            ->with('success', 'Inscrire deleted successfully');
    }
}
