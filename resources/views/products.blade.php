<x-app-layout>
    <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            @livewire('products-table')
        </div>
        <!-- Cart Counter -->
        @livewire('cart-counter')
    </div>


</x-app-layout>
