<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form method="POST" action="{{ route('projects.update', $project) }}">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <x-input-label for="name" value="Project Name" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{ $project->name }}" required />
                        </div>

                        <div>
                            <x-input-label for="location" value="Location" />
                            <x-text-input id="location" name="location" type="text" class="mt-1 block w-full" value="{{ $project->location }}" />
                        </div>

                        <div>
                            <x-input-label for="budget" value="Budget" />
                            <x-text-input id="budget" name="budget" type="number" step="0.01" class="mt-1 block w-full" value="{{ $project->budget }}" />
                        </div>

                        <div>
                            <x-input-label for="status" value="Status" />
                            <select id="status" name="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="planning" {{ $project->status === 'planning' ? 'selected' : '' }}>Planning</option>
                                <option value="in_progress" {{ $project->status === 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                <option value="on_hold" {{ $project->status === 'on_hold' ? 'selected' : '' }}>On Hold</option>
                                <option value="completed" {{ $project->status === 'completed' ? 'selected' : '' }}>Completed</option>
                                <option value="cancelled" {{ $project->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </select>
                        </div>

                        <div>
                            <x-input-label for="start_date" value="Start Date" />
                            <x-text-input id="start_date" name="start_date" type="date" class="mt-1 block w-full" value="{{ $project->start_date }}" />
                        </div>

                        <div>
                            <x-input-label for="end_date" value="End Date" />
                            <x-text-input id="end_date" name="end_date" type="date" class="mt-1 block w-full" value="{{ $project->end_date }}" />
                        </div>

                        <div class="md:col-span-2">
                            <x-input-label for="description" value="Description" />
                            <textarea id="description" name="description" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ $project->description }}</textarea>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <a href="{{ route('projects.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-3">Cancel</a>
                        <x-primary-button>Update Project</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>