<?php

namespace App\Http\Controllers;

use App\Models\Filter;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function index()
    {
        $filters = Filter::all();
        return view('filters.index', compact('filters'));
    }

    public function create()
    {
        return view('filters.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'idClient' => 'required|integer|exists:clients,id',
            'namaFilter' => 'required|string|max:255',
            'Preview' => 'required|image|mimes:jpg,png',
            'Filter' => 'required|string|max:255',
            'expiredDate' => 'required|date',
            'isActive' => 'required|boolean',
        ]);

        $filter = new Filter($request->all());

        if ($request->hasFile('Preview')) {
            $path = $request->file('Preview')->store('previews', 'public');
            $filter->Preview = $path;
        }

        $filter->save();

        return redirect()->route('filters.index')->with('success', 'Filter created successfully.');
    }

    public function show(Filter $filter)
    {
        return view('filters.show', compact('filter'));
    }

    public function edit(Filter $filter)
    {
        return view('filters.edit', compact('filter'));
    }

    public function update(Request $request, Filter $filter)
    {
        $request->validate([
            'idClient' => 'required|integer|exists:clients,id',
            'namaFilter' => 'required|string|max:255',
            'Preview' => 'nullable|image|mimes:jpg,png',
            'Filter' => 'required|string|max:255',
            'expiredDate' => 'required|date',
            'isActive' => 'required|boolean',
        ]);

        $filter->fill($request->all());

        if ($request->hasFile('Preview')) {
            $path = $request->file('Preview')->store('previews', 'public');
            $filter->Preview = $path;
        }

        $filter->save();

        return redirect()->route('filters.index')->with('success', 'Filter updated successfully.');
    }

    public function destroy(Filter $filter)
    {
        $filter->delete();
        return redirect()->route('filters.index')->with('success', 'Filter deleted successfully.');
    }
}
