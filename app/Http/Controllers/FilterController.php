<?php
namespace App\Http\Controllers;

use App\Models\Filter;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilterController extends Controller
{
    public function index()
    {
        $filters = Filter::with('order.client')->get();
        return view('filters.index', compact('filters'));
    }

    public function create()
    {
        $orders = Order::where('isActive', true)->get();
        return view('filters.create', compact('orders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'orderId' => 'required|exists:tb_order,id',
            'namaFilter' => 'required|string|max:255',
            'marker' => 'required|file|mimes:jpg,jpeg,png',
            'sound' => 'nullable|string|max:255',
            'preview' => 'nullable|file|mimes:jpg,jpeg,png'
        ]);

        $markerPath = $request->file('marker')->store('uploads/filters/markers', 'public');
        $soundPath = $request->sound;
        $previewPath = $request->file('preview') ? $request->file('preview')->store('uploads/filters/previews', 'public') : null;

        Filter::create([
            'orderId' => $request->orderId,
            'namaFilter' => $request->namaFilter,
            'marker' => $markerPath,
            'sound' => $soundPath,
            'preview' => $previewPath
        ]);

        return redirect()->route('filters.index')
                         ->with('success', 'Filter created successfully.');
    }

    public function show(Filter $filter)
    {
        return view('filters.show', compact('filter'));
    }

    public function edit(Filter $filter)
    {
        $orders = Order::where('isActive', true)->get();
        return view('filters.edit', compact('filter', 'orders'));
    }

    public function update(Request $request, Filter $filter)
    {
        $request->validate([
            'orderId' => 'required|exists:tb_order,id',
            'namaFilter' => 'required|string|max:255',
            'marker' => 'nullable|file|mimes:jpg,jpeg,png',
            'sound' => 'nullable|string|max:255',
            'preview' => 'nullable|file|mimes:jpg,jpeg,png'
        ]);

        $markerPath = $filter->marker;
        if ($request->hasFile('marker')) {
            Storage::disk('public')->delete($filter->marker);
            $markerPath = $request->file('marker')->store('uploads/filters/markers', 'public');
        }

        $soundPath = $request->sound;
        $previewPath = $filter->preview;
        if ($request->hasFile('preview')) {
            Storage::disk('public')->delete($filter->preview);
            $previewPath = $request->file('preview')->store('uploads/filters/previews', 'public');
        }

        $filter->update([
            'orderId' => $request->orderId,
            'namaFilter' => $request->namaFilter,
            'marker' => $markerPath,
            'sound' => $soundPath,
            'preview' => $previewPath
        ]);

        return redirect()->route('filters.index')
                         ->with('success', 'Filter updated successfully.');
    }

    public function destroy(Filter $filter)
    {
        Storage::disk('public')->delete([$filter->marker, $filter->sound, $filter->preview]);
        $filter->delete();
        return redirect()->route('filters.index')
                         ->with('success', 'Filter deleted successfully.');
    }
}
