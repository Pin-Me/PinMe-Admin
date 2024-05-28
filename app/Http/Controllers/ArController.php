<?php
namespace App\Http\Controllers;

use App\Models\Ar;
use App\Models\Filter;
use Illuminate\Http\Request;

class ArController extends Controller
{
    public function index()
    {
        $ars = Ar::with('filter')->get();
        return view('ars.index', compact('ars'));
    }

    public function create()
    {
        $filters = Filter::all();
        return view('ars.create', compact('filters'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'filterId' => 'required|exists:tb_filter,id',
            'ar' => 'nullable|string|max:255',
            'positionX' => 'nullable|numeric',
            'positionY' => 'nullable|numeric',
            'positionZ' => 'nullable|numeric',
        ]);

        Ar::create($request->all());
        return redirect()->route('ars.index')
                         ->with('success', 'AR created successfully.');
    }

    public function show(Ar $ar)
    {
        return view('ars.show', compact('ar'));
    }

    public function edit(Ar $ar)
    {
        $filters = Filter::all();
        return view('ars.edit', compact('ar', 'filters'));
    }

    public function update(Request $request, Ar $ar)
    {
        $request->validate([
            'filterId' => 'required|exists:tb_filter,id',
            'ar' => 'nullable|string|max:255',
            'positionX' => 'nullable|numeric',
            'positionY' => 'nullable|numeric',
            'positionZ' => 'nullable|numeric',
        ]);

        $ar->update($request->all());
        return redirect()->route('ars.index')
                         ->with('success', 'AR updated successfully.');
    }

    public function destroy(Ar $ar)
    {
        $ar->delete();
        return redirect()->route('ars.index')
                         ->with('success', 'AR deleted successfully.');
    }
}
