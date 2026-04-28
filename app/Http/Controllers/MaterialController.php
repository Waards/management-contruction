<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Project;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::with('project')->latest()->paginate(10);
        return view('materials.index', compact('materials'));
    }

    public function create()
    {
        $projects = Project::all();
        return view('materials.create', compact('projects'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'sku' => 'required|string|unique:materials,sku',
            'description' => 'nullable|string',
            'unit' => 'nullable|string|max:20',
            'unit_price' => 'nullable|numeric|min:0',
            'quantity' => 'nullable|integer|min:0',
            'min_quantity' => 'nullable|integer|min:0',
            'project_id' => 'nullable|exists:projects,id',
        ]);

        Material::create($validated);

        return redirect()->route('materials.index')->with('success', 'Material created successfully.');
    }

    public function show(Material $material)
    {
        return view('materials.show', compact('material'));
    }

    public function edit(Material $material)
    {
        $projects = Project::all();
        return view('materials.edit', compact('material', 'projects'));
    }

    public function update(Request $request, Material $material)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'sku' => 'required|string|unique:materials,sku,' . $material->id,
            'description' => 'nullable|string',
            'unit' => 'nullable|string|max:20',
            'unit_price' => 'nullable|numeric|min:0',
            'quantity' => 'nullable|integer|min:0',
            'min_quantity' => 'nullable|integer|min:0',
            'project_id' => 'nullable|exists:projects,id',
        ]);

        $material->update($validated);

        return redirect()->route('materials.index')->with('success', 'Material updated successfully.');
    }

    public function destroy(Material $material)
    {
        $material->delete();
        return redirect()->route('materials.index')->with('success', 'Material deleted successfully.');
    }
}