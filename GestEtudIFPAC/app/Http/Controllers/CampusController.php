<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CampusRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CampusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $campuses = Campus::paginate();

        return view('campus.index', compact('campuses'))
            ->with('i', ($request->input('page', 1) - 1) * $campuses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $campus = new Campus();

        return view('campus.create', compact('campus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CampusRequest $request): RedirectResponse
    {
        Campus::create($request->validated());

        return Redirect::route('campuses.index')
            ->with('success', 'Campus created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $campus = Campus::find($id);

        return view('campus.show', compact('campus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $campus = Campus::find($id);

        return view('campus.edit', compact('campus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CampusRequest $request, Campus $campus): RedirectResponse
    {
        $campus->update($request->validated());

        return Redirect::route('campuses.index')
            ->with('success', 'Campus updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Campus::find($id)->delete();

        return Redirect::route('campuses.index')
            ->with('success', 'Campus deleted successfully');
    }
}
