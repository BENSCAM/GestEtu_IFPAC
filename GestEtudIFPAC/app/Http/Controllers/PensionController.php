<?php

namespace App\Http\Controllers;

use App\Models\Pension;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PensionRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PensionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $pensions = Pension::paginate();

        return view('pension.index', compact('pensions'))
            ->with('i', ($request->input('page', 1) - 1) * $pensions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $pension = new Pension();

        return view('pension.create', compact('pension'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PensionRequest $request): RedirectResponse
    {
        Pension::create($request->validated());

        return Redirect::route('pension.index')
            ->with('success', 'Pension created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $pension = Pension::find($id);

        return view('pension.show', compact('pension'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $pension = Pension::find($id);

        return view('pension.edit', compact('pension'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PensionRequest $request, Pension $pension): RedirectResponse
    {
        $pension->update($request->validated());

        return Redirect::route('pension.index')
            ->with('success', 'Pension updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Pension::find($id)->delete();

        return Redirect::route('pension.index')
            ->with('success', 'Pension deleted successfully');
    }
}
