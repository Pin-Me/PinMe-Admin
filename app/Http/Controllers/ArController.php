<?php
namespace App\Http\Controllers;

use App\Models\Ar;
use App\Models\Filter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        // Validasi manual untuk mime type .glb
        $request->validate([
            'filterId' => 'required|exists:tb_filter,id',
            'ar' => [
                'required',
                'file',
                function ($attribute, $value, $fail) {
                    $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/jpg', 'application/octet-stream'];
                    $allowedExtensions = ['jpg', 'jpeg', 'png', 'obj', 'glb'];
                    $extension = $value->getClientOriginalExtension();
                    $mimeType = $value->getMimeType();
                    if (!in_array($extension, $allowedExtensions) || !in_array($mimeType, $allowedMimeTypes)) {
                        $fail("The $attribute must be a file of type: jpg, jpeg, png, obj, glb.");
                    }
                },
            ],
            'positionX' => 'nullable|numeric',
            'positionY' => 'nullable|numeric',
            'positionZ' => 'nullable|numeric'
        ]);

        $arPath = $request->file('ar')->store('uploads/ars/objects', 'public');

        Ar::create([
            'filterId' => $request->filterId,
            'ar' => $arPath,
            'positionX' => $request->positionX,
            'positionY' => $request->positionY,
            'positionZ' => $request->positionZ
        ]);

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
        // Validasi manual untuk mime type .glb
        $request->validate([
            'filterId' => 'required|exists:tb_filter,id',
            'ar' => [
                'nullable',
                'file',
                function ($attribute, $value, $fail) {
                    $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/jpg', 'application/octet-stream'];
                    $allowedExtensions = ['jpg', 'jpeg', 'png', 'obj', 'glb'];
                    $extension = $value->getClientOriginalExtension();
                    $mimeType = $value->getMimeType();
                    if (!in_array($extension, $allowedExtensions) || !in_array($mimeType, $allowedMimeTypes)) {
                        $fail("The $attribute must be a file of type: jpg, jpeg, png, obj, glb.");
                    }
                },
            ],
            'positionX' => 'nullable|numeric',
            'positionY' => 'nullable|numeric',
            'positionZ' => 'nullable|numeric'
        ]);

        $arPath = $ar->ar;
        if ($request->hasFile('ar')) {
            Storage::disk('public')->delete($ar->ar);
            $arPath = $request->file('ar')->store('uploads/ars/objects', 'public');
        }

        $ar->update([
            'filterId' => $request->filterId,
            'ar' => $arPath,
            'positionX' => $request->positionX,
            'positionY' => $request->positionY,
            'positionZ' => $request->positionZ
        ]);

        return redirect()->route('ars.index')
                         ->with('success', 'AR updated successfully.');
    }

    public function destroy(Ar $ar)
    {
        Storage::disk('public')->delete($ar->ar);
        $ar->delete();
        return redirect()->route('ars.index')
                         ->with('success', 'AR deleted successfully.');
    }
}
