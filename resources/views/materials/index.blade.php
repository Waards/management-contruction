<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Materials') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4 flex justify-end">
                <a href="{{ route('materials.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    + New Material
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SKU</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Unit Price</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($materials as $material)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $material->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $material->sku }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $material->quantity }} {{ $material->unit }}
                                    @if($material->quantity < $material->min_quantity)
                                        <span class="text-red-500 text-xs">(Low)</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">${{ number_format($material->unit_price, 2) }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($material->quantity < $material->min_quantity)
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800">Low Stock</span>
                                    @else
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">In Stock</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <a href="{{ route('materials.show', $material) }}" class="text-blue-600 hover:text-blue-900 mr-3">View</a>
                                    <a href="{{ route('materials.edit', $material) }}" class="text-yellow-600 hover:text-yellow-900 mr-3">Edit</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-4 text-center text-gray-500">No materials found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $materials->links() }}
            </div>
        </div>
    </div>
</x-app-layout>