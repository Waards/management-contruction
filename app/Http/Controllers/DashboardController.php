<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Worker;
use App\Models\Expense;
use App\Models\Material;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'projects' => Project::count(),
            'workers' => Worker::count(),
            'total_expenses' => Expense::sum('amount'),
            'low_stock_items' => Material::whereRaw('quantity < min_quantity')->count(),
        ];

        $recentProjects = Project::latest()->take(5)->get();
        $recentExpenses = Expense::with('project')->latest()->take(5)->get();

        return view('dashboard', compact('stats', 'recentProjects', 'recentExpenses'));
    }
}