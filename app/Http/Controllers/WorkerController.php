<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::latest()->paginate(10);
        return view('workers.index', compact('workers'));
    }

    public function create()
    {
        return view('workers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:workers,email',
            'phone' => 'nullable|string|max:20',
            'position' => 'nullable|string|max:100',
            'hourly_rate' => 'nullable|numeric|min:0',
            'status' => 'nullable|in:active,inactive,on_leave',
        ]);

        Worker::create($validated);

        return redirect()->route('workers.index')->with('success', 'Worker created successfully.');
    }

    public function show(Worker $worker)
    {
        return view('workers.show', compact('worker'));
    }

    public function edit(Worker $worker)
    {
        return view('workers.edit', compact('worker'));
    }

    public function update(Request $request, Worker $worker)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:workers,email,' . $worker->id,
            'phone' => 'nullable|string|max:20',
            'position' => 'nullable|string|max:100',
            'hourly_rate' => 'nullable|numeric|min:0',
            'status' => 'nullable|in:active,inactive,on_leave',
        ]);

        $worker->update($validated);

        return redirect()->route('workers.index')->with('success', 'Worker updated successfully.');
    }

    public function destroy(Worker $worker)
    {
        $worker->delete();
        return redirect()->route('workers.index')->with('success', 'Worker deleted successfully.');
    }
}