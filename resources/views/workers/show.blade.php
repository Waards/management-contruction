<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Worker Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Name</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ $worker->name }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Email</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ $worker->email }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Phone</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ $worker->phone ?? 'N/A' }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Position</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ $worker->position ?? 'N/A' }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Hourly Rate</h3>
                        <p class="mt-1 text-lg text-gray-900">${{ number_format($worker->hourly_rate, 2) ?? 'N/A' }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Status</h3>
                        <span class="mt-1 px-2 py-1 text-sm font-medium rounded-full bg-{{ $worker->status === 'active' ? 'green' : ($worker->status === 'on_leave' ? 'yellow' : 'gray') }}-100 text-{{ $worker->status === 'active' ? 'green' : ($worker->status === 'on_leave' ? 'yellow' : 'gray') }}-800">
                            {{ ucfirst($worker->status) }}
                        </span>
                    </div>
                </div>

                <div class="mt-6 flex justify-start">
                    <a href="{{ route('workers.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back to Workers</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>