<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Expense') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form method="POST" action="{{ route('expenses.store') }}">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="md:col-span-2">
                            <x-input-label for="description" value="Description" />
                            <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" required />
                        </div>

                        <div>
                            <x-input-label for="amount" value="Amount" />
                            <x-text-input id="amount" name="amount" type="number" step="0.01" class="mt-1 block w-full" required />
                        </div>

                        <div>
                            <x-input-label for="type" value="Type" />
                            <select id="type" name="type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                <option value="labor">Labor</option>
                                <option value="material">Material</option>
                                <option value="equipment">Equipment</option>
                                <option value="transport">Transport</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <x-input-label for="expense_date" value="Date" />
                            <x-text-input id="expense_date" name="expense_date" type="date" class="mt-1 block w-full" required />
                        </div>

                        <div>
                            <x-input-label for="project_id" value="Project" />
                            <select id="project_id" name="project_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                @foreach($projects as $project)
                                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <x-input-label for="worker_id" value="Worker (Optional)" />
                            <select id="worker_id" name="worker_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="">None</option>
                                @foreach($workers as $worker)
                                    <option value="{{ $worker->id }}">{{ $worker->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <a href="{{ route('expenses.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-3">Cancel</a>
                        <x-primary-button>Create Expense</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>