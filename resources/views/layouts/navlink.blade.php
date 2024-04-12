<!-- Title -->
<div class="pt-32 bg-white">
    <h1 class="text-2xl font-bold text-center text-gray-800">All Products</h1>
</div>
<div class="flex flex-wrap items-center justify-center py-10 overflow-x-auto overflow-y-hidden text-gray-800 bg-white">
    <a rel="noopener noreferrer" href="{{ route('products.phone') }}"
        class="flex items-center flex-shrink-0 px-5 py-3 space-x-2 text-gray-900 rounded-t-lg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
            <path fill-rule="evenodd"
                d="M5 4a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V4Zm12 12V5H7v11h10Zm-5 1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                clip-rule="evenodd" />
        </svg>
        <span>Smartphone</span>
    </a>
    <a rel="noopener noreferrer" href="{{ route('products.computer') }}"
        class="flex items-center flex-shrink-0 px-5 py-3 space-x-2 text-gray-900 rounded-t-lg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
            <path fill-rule="evenodd"
                d="M12 8a1 1 0 0 0-1 1v10H9a1 1 0 1 0 0 2h11a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1h-8Zm4 10a2 2 0 1 1 0-4 2 2 0 0 1 0 4Z"
                clip-rule="evenodd" />
            <path fill-rule="evenodd"
                d="M5 3a2 2 0 0 0-2 2v6h6V9a3 3 0 0 1 3-3h8c.35 0 .687.06 1 .17V5a2 2 0 0 0-2-2H5Zm4 10H3v2a2 2 0 0 0 2 2h4v-4Z"
                clip-rule="evenodd" />
        </svg>
        <span>Computer</span>
    </a>
    <a rel="noopener noreferrer" href="{{ route('accessories.index') }}"
        class="flex items-center flex-shrink-0 px-5 py-3 space-x-2 text-gray-900 rounded-t-lg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
            <path fill-rule="evenodd"
                d="M5.617 2.076a1 1 0 0 1 1.09.217L8 3.586l1.293-1.293a1 1 0 0 1 1.414 0L12 3.586l1.293-1.293a1 1 0 0 1 1.414 0L16 3.586l1.293-1.293A1 1 0 0 1 19 3v18a1 1 0 0 1-1.707.707L16 20.414l-1.293 1.293a1 1 0 0 1-1.414 0L12 20.414l-1.293 1.293a1 1 0 0 1-1.414 0L8 20.414l-1.293 1.293A1 1 0 0 1 5 21V3a1 1 0 0 1 .617-.924ZM9 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H9Zm0 4a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Zm0 4a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z"
                clip-rule="evenodd" />
        </svg>
        <span>Accessory</span>
    </a>
</div>
