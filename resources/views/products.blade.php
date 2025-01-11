<x-app-layout>
    <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            @livewire('products-table')
            <button onclick="toggleCart()"
                class="fixed bottom-4 right-4 bg-blue-500 text-white font-bold py-2 px-4 rounded-full shadow-lg hover:bg-blue-700">
                View Cart
            </button>
            @livewire('cart-counter')

        </div>
        <!-- Cart Counter -->

    </div>


</x-app-layout>
