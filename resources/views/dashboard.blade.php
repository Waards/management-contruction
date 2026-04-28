<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-3xl font-bold text-gray-800">{{ $stats['projects'] }}</div>
                    <div class="text-sm text-gray-500 mt-1">Total Projects</div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-3xl font-bold text-gray-800">{{ $stats['workers'] }}</div>
                    <div class="text-sm text-gray-500 mt-1">Total Workers</div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-3xl font-bold text-gray-800">${{ number_format($stats['total_expenses'], 2) }}</div>
                    <div class="text-sm text-gray-500 mt-1">Total Expenses</div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="text-3xl font-bold text-red-600">{{ $stats['low_stock_items'] }}</div>
                    <div class="text-sm text-gray-500 mt-1">Low Stock Items</div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 border-b border-gray-100">
                        <h3 class="font-semibold text-lg text-gray-800">Recent Projects</h3>
                    </div>
                    <div class="p-6">
                        @forelse($recentProjects as $project)
                            <div class="flex justify-between items-center py-2 border-b border-gray-50 last:border-0">
                                <div>
                                    <div class="font-medium text-gray-800">{{ $project->name }}</div>
                                    <div class="text-sm text-gray-500">{{ $project->location ?? 'No location' }}</div>
                                </div>
                                <span class="px-2 py-1 text-xs font-medium rounded-full bg-{{ $project->status === 'completed' ? 'green' : ($project->status === 'in_progress' ? 'blue' : 'gray') }}-100 text-{{ $project->status === 'completed' ? 'green' : ($project->status === 'in_progress' ? 'blue' : 'gray') }}-800">
                                    {{ ucfirst(str_replace('_', ' ', $project->status)) }}
                                </span>
                            </div>
                        @empty
                            <p class="text-gray-500 text-center py-4">No projects yet</p>
                        @endforelse
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 border-b border-gray-100">
                        <h3 class="font-semibold text-lg text-gray-800">Recent Expenses</h3>
                    </div>
                    <div class="p-6">
                        @forelse($recentExpenses as $expense)
                            <div class="flex justify-between items-center py-2 border-b border-gray-50 last:border-0">
                                <div>
                                    <div class="font-medium text-gray-800">{{ $expense->description }}</div>
                                    <div class="text-sm text-gray-500">{{ $expense->project->name ?? 'N/A' }}</div>
                                </div>
                                <div class="text-right">
                                    <div class="font-medium text-gray-800">${{ number_format($expense->amount, 2) }}</div>
                                    <div class="text-sm text-gray-500">{{ $expense->expense_date->format('M d') }}</div>
                                </div>
                            </div>
                        @empty
                            <p class="text-gray-500 text-center py-4">No expenses yet</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
