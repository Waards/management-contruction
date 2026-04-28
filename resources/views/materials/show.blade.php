<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Material Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Name</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ $material->name }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">SKU</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ $material->sku }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Unit</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ $material->unit }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Unit Price</h3>
                        <p class="mt-1 text-lg text-gray-900">${{ number_format($material->unit_price, 2) }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Quantity</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ $material->quantity }} {{ $material->unit }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Minimum Quantity</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ $material->min_quantity }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Status</h3>
                        @if($material->quantity < $material->min_quantity)
                            <span class="mt-1 px-2 py-1 text-sm font-medium rounded-full bg-red-100 text-red-800">Low Stock</span>
                        @else
                            <span class="mt-1 px-2 py-1 text-sm font-medium rounded-full bg-green-100 text-green-800">In Stock</span>
                        @endif
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Project</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ $material->project->name ?? 'N/A' }}</p>
                    </div>
                    <div class="md:col-span-2">
                        <h3 class="text-sm font-medium text-gray-500">Description</h3>
                        <p class="mt-1 text-lg text-gray-900">{{ $material->description ?? 'No description' }}</p>
                    </div>
                </div>

                <div class="mt-6 flex justify-start">
                    <a href="{{ route('materials.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back to Materials</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>