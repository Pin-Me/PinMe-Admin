<?php
namespace App\Http\Controllers;

use App\Models\Filter;
use App\Models\Client;
use App\Models\Order;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function index()
    {
        $filters = Filter::with('order.client')->get();
        return view('filters.index', compact('filters'));
    }

    public function create()
    {
        $orders = Order::all();
        return view('filters.create', compact('orders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'orderId' => 'required|exists:tb_order,id',
            'namaFilter' => 'required|string|max:255',
            'marker' => 'required|string|max:255',
            'sound' => 'nullable|string|max:255',
            'preview' => 'nullable|string|max:255',
        ]);

        Filter::create($request->all());
        return redirect()->route('filters.index')
                         ->with('success', 'Filter created successfully.');
    }

    public function show(Filter $filter)
    {
        $filter->load('order.client');
        return view('filters.show', compact('filter'));
    }


    public function edit(Filter $filter)
    {
        $orders = Order::all();
        return view('filters.edit', compact('filter', 'orders'));
    }

    public function update(Request $request, Filter $filter)
    {
        $request->validate([
            'orderId' => 'required|exists:tb_order,id',
            'namaFilter' => 'required|string|max:255',
            'marker' => 'required|string|max:255',
            'sound' => 'nullable|string|max:255',
            'preview' => 'nullable|string|max:255',
        ]);

        $filter->update($request->all());
        return redirect()->route('filters.index')
                         ->with('success', 'Filter updated successfully.');
    }

    public function destroy(Filter $filter)
    {
        $filter->delete();
        return redirect()->route('filters.index')
                         ->with('success', 'Filter deleted successfully.');
    }
}
