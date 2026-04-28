<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Expense Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Description</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ $expense->description }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Amount</h3>
                        <p class="mt-1 text-lg text-gray-900">${{ number_format($expense->amount, 2) }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Type</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ ucfirst($expense->type) }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Date</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ $expense->expense_date->format('M d, Y') }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Project</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ $expense->project->name ?? 'N/A' }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Worker</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ $expense->worker->name ?? 'N/A' }}</p>
                    </div>
                </div>

                <div class="mt-6 flex justify-start">
                    <a href="{{ route('expenses.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back to Expenses</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>