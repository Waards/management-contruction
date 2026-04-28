<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Worker') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form method="POST" action="{{ route('workers.update', $worker) }}">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <x-input-label for="name" value="Name" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{ $worker->name }}" required />
                        </div>

                        <div>
                            <x-input-label for="email" value="Email" />
                            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" value="{{ $worker->email }}" required />
                        </div>

                        <div>
                            <x-input-label for="phone" value="Phone" />
                            <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" value="{{ $worker->phone }}" />
                        </div>

                        <div>
                            <x-input-label for="position" value="Position" />
                            <x-text-input id="position" name="position" type="text" class="mt-1 block w-full" value="{{ $worker->position }}" />
                        </div>

                        <div>
                            <x-input-label for="hourly_rate" value="Hourly Rate" />
                            <x-text-input id="hourly_rate" name="hourly_rate" type="number" step="0.01" class="mt-1 block w-full" value="{{ $worker->hourly_rate }}" />
                        </div>

                        <div>
                            <x-input-label for="status" value="Status" />
                            <select id="status" name="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="active" {{ $worker->status === 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ $worker->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                                <option value="on_leave" {{ $worker->status === 'on_leave' ? 'selected' : '' }}>On Leave</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <a href="{{ route('workers.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-3">Cancel</a>
                        <x-primary-button>Update Worker</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>