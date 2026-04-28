<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Material') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form method="POST" action="{{ route('materials.store') }}">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <x-input-label for="name" value="Name" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required />
                        </div>

                        <div>
                            <x-input-label for="sku" value="SKU" />
                            <x-text-input id="sku" name="sku" type="text" class="mt-1 block w-full" required />
                        </div>

                        <div>
                            <x-input-label for="unit" value="Unit" />
                            <x-text-input id="unit" name="unit" type="text" class="mt-1 block w-full" placeholder="piece, kg, liter..." />
                        </div>

                        <div>
                            <x-input-label for="unit_price" value="Unit Price" />
                            <x-text-input id="unit_price" name="unit_price" type="number" step="0.01" class="mt-1 block w-full" />
                        </div>

                        <div>
                            <x-input-label for="quantity" value="Quantity" />
                            <x-text-input id="quantity" name="quantity" type="number" class="mt-1 block w-full" />
                        </div>

                        <div>
                            <x-input-label for="min_quantity" value="Minimum Quantity" />
                            <x-text-input id="min_quantity" name="min_quantity" type="number" class="mt-1 block w-full" />
                        </div>

                        <div>
                            <x-input-label for="project_id" value="Project (Optional)" />
                            <select id="project_id" name="project_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                <option value="">None</option>
                                @foreach($projects as $project)
                                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="md:col-span-2">
                            <x-input-label for="description" value="Description" />
                            <textarea id="description" name="description" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <a href="{{ route('materials.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-3">Cancel</a>
                        <x-primary-button>Create Material</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>