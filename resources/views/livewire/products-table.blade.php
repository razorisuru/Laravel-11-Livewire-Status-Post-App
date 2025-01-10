<table class="min-w-full bg-white">
    <thead class="bg-gray-800 text-white">
        <tr>
            {{-- <th class="w-1/12 px-4 py-2">#</th> --}}
            <th class="w-2/12 px-4 py-2">Name</th>
            <th class="w-3/12 px-4 py-2">Description</th>
            <th class="w-1/12 px-4 py-2">Price</th>
            <th class="w-1/12 px-4 py-2">Stock</th>
            <th class="w-1/12 px-4 py-2">Quantity</th>
            {{-- <th class="w-2/12 px-4 py-2">Image</th> --}}
            <th class="w-1/12 px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr class="border-b hover:bg-gray-100">
                {{-- <td class="px-4 py-2 text-center">{{ $loop->iteration }}</td> --}}
                <td class="px-4 py-2">{{ $product->name }}</td>
                <td class="px-4 py-2">{{ $product->description }}</td>
                <td class="px-4 py-2 text-right">${{ number_format($product->price, 2) }}</td>
                <td class="px-4 py-2 text-center">{{ $product->stock }}</td>
                <form wire:submit.prevent="addToCart({{ $product->id }})" action="">
                    @csrf
                    <td class="px-4 py-2 text-center">
                        <input type="number" wire:model="quantity.{{ $product->id }}" min="1"
                            max="{{ $product->stock }}" value="1"
                            class="w-16 text-center border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                    </td>
                    {{-- <td class="px-4 py-2 text-center">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}"
                        class="w-16 h-16 object-cover rounded">
                </td> --}}
                    <td class="px-4 py-2 text-center">
                        <div class="flex items-center justify-center space-x-2">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
                                Add to Cart
                            </button>
                            {{-- <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                                Delete
                            </button>
                        </form> --}}
                        </div>
                    </td>
                </form>
            </tr>
        @endforeach
    </tbody>
</table>
