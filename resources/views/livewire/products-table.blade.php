<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4 bg-gray-100">
    @foreach ($products as $product)
        <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg">
            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800">{{ $product->name }}</h3>
                <p class="text-sm text-gray-600 mt-1 truncate">{{ $product->description }}</p>
                <div class="flex items-center justify-between mt-3">
                    <span class="text-xl font-bold text-green-600">${{ number_format($product->price, 2) }}</span>
                    <span class="text-sm text-gray-500">{{ $product->stock }} in stock</span>
                </div>
                <form wire:submit.prevent="addToCart({{ $product->id }})" class="mt-4">
                    @csrf
                    <div class="flex items-center space-x-2">
                        <input type="number" wire:model="quantity.{{ $product->id }}" min="1"
                            max="{{ $product->stock }}" value="1"
                            class="w-16 text-center border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                        <button type="submit"
                            class="flex-1 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Add to Cart
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
</div>

