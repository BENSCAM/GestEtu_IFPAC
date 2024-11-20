<?php

namespace App\Http\Controllers;

use App\Models\Payer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PayerRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $payers = Payer::paginate();

        return view('payer.index', compact('payers'))
            ->with('i', ($request->input('page', 1) - 1) * $payers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $payer = new Payer();

        return view('payer.create', compact('payer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PayerRequest $request): RedirectResponse
    {
        Payer::create($request->validated());

        return Redirect::route('payers.index')
            ->with('success', 'Payer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $payer = Payer::find($id);

        return view('payer.show', compact('payer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $payer = Payer::find($id);

        return view('payer.edit', compact('payer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PayerRequest $request, Payer $payer): RedirectResponse
    {
        $payer->update($request->validated());

        return Redirect::route('payers.index')
            ->with('success', 'Payer updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Payer::find($id)->delete();

        return Redirect::route('payers.index')
            ->with('success', 'Payer deleted successfully');
    }
}
