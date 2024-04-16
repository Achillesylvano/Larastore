<div class="w-64 p-3 duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl hover:transform hover:scale-105 h-80">
    <div class="relative flex items-end h-48 overflow-hidden rounded-xl">
        <!-- Hauteur un peu plus carrée -->
        <img src="{{ $accessory->imageUrl() }}" class="object-contain w-full h-full" alt="accessory photo" />
    </div>
    <a class="p-2 mt-1" href="{{ route('accessories.show', $accessory) }}">
        <h2 class="text-gray-900">{{ $accessory->brand }}</h2>
        <p class="mt-1">
            <span class="mt-3 text-xs text-slate-700">{{ $accessory->property->category }} -</span>
            <span class="mb-2 text-xs font-light text-orange-500">{{ $accessory->status ? 'Nouveau' : 'Occasion' }}
            </span>
        </p>
        <div class="flex items-end justify-between m-auto">
            <p class="text-lg font-bold text-blue-500">${{ $accessory->price }}</p>
            <div
                class="flex items-center space-x-1.5 rounded-lg bg-blue-500 px-4 py-1.5 text-white duration-100 hover:bg-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <button class="text-sm">Info</button>
            </div>
        </div>
    </a>
</div>
