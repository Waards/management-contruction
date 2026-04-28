<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Project;
use App\Models\Worker;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::with('project')->latest()->paginate(10);
        return view('expenses.index', compact('expenses'));
    }

    public function create()
    {
        $projects = Project::all();
        $workers = Worker::all();
        return view('expenses.create', compact('projects', 'workers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'type' => 'required|in:labor,material,equipment,transport,other',
            'expense_date' => 'required|date',
            'project_id' => 'required|exists:projects,id',
            'worker_id' => 'nullable|exists:workers,id',
        ]);

        $validated['user_id'] = auth()->id();
        Expense::create($validated);

        return redirect()->route('expenses.index')->with('success', 'Expense created successfully.');
    }

    public function show(Expense $expense)
    {
        return view('expenses.show', compact('expense'));
    }

    public function edit(Expense $expense)
    {
        $projects = Project::all();
        $workers = Worker::all();
        return view('expenses.edit', compact('expense', 'projects', 'workers'));
    }

    public function update(Request $request, Expense $expense)
    {
        $validated = $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'type' => 'required|in:labor,material,equipment,transport,other',
            'expense_date' => 'required|date',
            'project_id' => 'required|exists:projects,id',
            'worker_id' => 'nullable|exists:workers,id',
        ]);

        $expense->update($validated);

        return redirect()->route('expenses.index')->with('success', 'Expense updated successfully.');
    }

    public function destroy(Expense $expense)
    {
        $expense->delete();
        return redirect()->route('expenses.index')->with('success', 'Expense deleted successfully.');
    }
}