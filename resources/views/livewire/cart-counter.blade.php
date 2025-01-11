<div class="">
    <button onclick="toggleCart()"
    class="fixed bottom-4 right-4 bg-blue-500 text-white font-bold py-2 px-4 rounded-full shadow-lg hover:bg-blue-700">
    View Cart
</button>
<!-- Cart Canvas -->
<div id="cartCanvas"
    class="fixed top-0 right-0 h-full w-80 bg-white shadow-lg transform {{ $isCartOpen ? 'translate-x-0' : 'translate-x-full' }} transition-transform duration-300 z-50">
    <!-- Header -->
    <div class="flex items-center justify-between px-4 py-3 bg-gray-800 text-white">
        <h2 class="text-lg font-semibold">Your Cart ({{ $cartCount }})</h2>
        <button onclick="toggleCart()" class="text-white hover:text-gray-400">
            &times;
        </button>
    </div>

    <!-- Cart Items -->
    <div class="p-4 space-y-4">
        @foreach ($cartMat as $item)
            <div class="flex items-center space-x-4">
                <img src="{{ asset('storage/product-images/' . $item['attributes']['image']) }}"
                    alt="{{ $item['attributes']['name'] }}" class="w-16 h-16 object-cover rounded-md">
                <div class="flex-1">
                    <h3 class="font-semibold text-gray-800">{{ $item['attributes']['name'] }}</h3>
                    <p class="text-sm text-gray-600">Qty: {{ $item['quantity'] }}</p>
                    <p class="text-sm text-gray-600">Price: ${{ number_format($item['price'], 2) }}</p>
                </div>
                <button wire:click="removeFromCart({{ $item['item_id'] }})" class="text-red-500 hover:text-red-700">
                    Remove
                </button>
            </div>
        @endforeach

        <!-- Empty Cart Message -->
        @if (count($cartMat) === 0)
            <p class="text-center text-gray-500">Your cart is empty.</p>
        @endif
    </div>

    <!-- Footer -->
    <div class="absolute bottom-0 w-full bg-gray-800 p-4">
        <div class="flex items-center justify-between text-white">
            <span class="text-lg font-semibold">Total:</span>
            <span class="text-lg font-bold">${{ number_format($cartTotal, 2) }}</span>
        </div>
        <button wire:click="checkout()"
            class="mt-4 w-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Checkout
        </button>
    </div>
</div>

<script>
    function toggleCart() {
        @this.toggleCart();
    }
</script>

</div>
