<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Name</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ $project->name }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Location</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ $project->location ?? 'N/A' }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Budget</h3>
                        <p class="mt-1 text-lg text-gray-900">${{ number_format($project->budget, 2) }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Status</h3>
                        <span class="mt-1 px-2 py-1 text-sm font-medium rounded-full bg-{{ $project->status === 'completed' ? 'green' : ($project->status === 'in_progress' ? 'blue' : 'gray') }}-100 text-{{ $project->status === 'completed' ? 'green' : ($project->status === 'in_progress' ? 'blue' : 'gray') }}-800">
                            {{ ucfirst(str_replace('_', ' ', $project->status)) }}
                        </span>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Start Date</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ $project->start_date?->format('M d, Y') ?? 'N/A' }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">End Date</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ $project->end_date?->format('M d, Y') ?? 'N/A' }}</p>
                    </div>
                    <div class="md:col-span-2">
                        <h3 class="text-sm font-medium text-gray-500">Description</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ $project->description ?? 'No description' }}</p>
                    </div>
                </div>

                <div class="mt-6 flex justify-start">
                    <a href="{{ route('projects.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back to Projects</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>