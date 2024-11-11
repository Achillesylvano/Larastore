@extends('base')
@section('content')
    <main class="pt-20">
        <div class="px-4 pt-6">
            <div class="mt-4 grid w-full grid-cols-1 gap-4 xl:grid-cols-4 2xl:grid-cols-3">
                <div
                    class="items-center justify-between rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:flex sm:p-6">
                    <div class="w-full">
                        <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Total users</h3>
                        <span
                            class="text-2xl font-bold leading-none text-gray-900 dark:text-white sm:text-3xl">{{ $subscribersCount }}</span>
                        <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
                            <span
                                class="flex items-center mr-1.5 text-sm  {{ $subscribersVariationPercentage >= 0 ? 'text-green-500 dark:text-green-400' : 'text-red-500 dark:text-red-400' }}">
                                @if ($subscribersVariationPercentage >= 0)
                                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                              d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                        </path>
                                    </svg>
                                @else
                                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                              d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                        </path>
                                    </svg>
                                @endif
                                {{ $subscribersVariationPercentage }}%
                            </span>
                        </p>
                        <span class="text-base font-normal text-gray-500 dark:text-gray-400"> Since last month</span>
                    </div>
                    <div class="w-full" id="new-products-chart"></div>
                </div>
                <div
                    class="items-center justify-between rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:flex sm:p-6">
                    <div class="w-full">
                        <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Total smartphone</h3>
                        <span
                            class="text-2xl font-bold leading-none text-gray-900 dark:text-white sm:text-3xl">{{ $productSmartphoneCount }}</span>
                        <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
                            <span
                                class="flex items-center mr-1.5 text-sm  {{ $productSmartphonesVariationPercentage >= 0 ? 'text-green-500 dark:text-green-400' : 'text-red-500 dark:text-red-400' }}">
                                @if ($productSmartphonesVariationPercentage >= 0)
                                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                              d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                        </path>
                                    </svg>
                                @else
                                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                              d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                        </path>
                                    </svg>
                                @endif
                                {{ $productSmartphonesVariationPercentage }}%
                            </span>
                        </p>
                        <span class="text-base font-normal text-gray-500 dark:text-gray-400"> Since last month</span>
                    </div>
                </div>
                <div
                    class="items-center justify-between rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:flex sm:p-6">
                    <div class="w-full">
                        <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Total computer</h3>
                        <span
                            class="text-2xl font-bold leading-none text-gray-900 dark:text-white sm:text-3xl">{{ $productComputerCount }}</span>
                        <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
                            <span
                                class="flex items-center mr-1.5 text-sm  {{ $productComputersVariationPercentage >= 0 ? 'text-green-500 dark:text-green-400' : 'text-red-500 dark:text-red-400' }}">
                                @if ($productComputersVariationPercentage >= 0)
                                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                              d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                        </path>
                                    </svg>
                                @else
                                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                              d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                        </path>
                                    </svg>
                                @endif
                                {{ $productComputersVariationPercentage }}%
                            </span>
                        </p>
                        <span class="text-base font-normal text-gray-500 dark:text-gray-400"> Since last month</span>
                    </div>
                </div>
                <div
                    class="items-center justify-between rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:flex sm:p-6">
                    <div class="w-full">
                        <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Total accessories</h3>
                        <span
                            class="text-2xl font-bold leading-none text-gray-900 dark:text-white sm:text-3xl">{{ $accessoryCount }}</span>
                        <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
                            <span
                                class="flex items-center mr-1.5 text-sm  {{ $accessoryVariationPercentage >= 0 ? 'text-green-500 dark:text-green-400' : 'text-red-500 dark:text-red-400' }}">
                                @if ($accessoryVariationPercentage >= 0)
                                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                              d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                        </path>
                                    </svg>
                                @else
                                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                              d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z">
                                        </path>
                                    </svg>
                                @endif

                                {{ $accessoryVariationPercentage }}%
                            </span>
                        </p>
                        <span class="text-base font-normal text-gray-500 dark:text-gray-400"> Since last month</span>
                    </div>
                    <div class="w-full" id="new-products-chart"></div>
                </div>
            </div>
            <div
                class="mt-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                <div x-data="{ selectedTab: 'products' }" class="w-full">
                    <div @keydown.right.prevent="$focus.wrap().next()" @keydown.left.prevent="$focus.wrap().previous()"
                         class="flex gap-2 overflow-x-auto border-b border-slate-300 dark:border-slate-700"
                         role="tablist" aria-label="tab options">
                        <button @click="selectedTab = 'products'" :aria-selected="selectedTab === 'products'"
                                :tabindex="selectedTab === 'products' ? '0' : '-1'"
                                :class="selectedTab === 'products' ? 'font-bold text-blue-700 border-b-2 border-blue-700 dark:border-blue-600 dark:text-blue-600' : 'text-slate-700 font-medium dark:text-slate-300 dark:hover:border-b-slate-300 dark:hover:text-white hover:border-b-2 hover:border-b-slate-800 hover:text-black'"
                                class="h-min px-4 py-2 text-sm" type="button" role="tab"
                                aria-controls="tabpanelProducts">
                            Products
                        </button>
                        <button @click="selectedTab = 'accessories'" :aria-selected="selectedTab === 'accessories'"
                                :tabindex="selectedTab === 'accessories' ? '0' : '-1'"
                                :class="selectedTab === 'accessories' ? 'font-bold text-blue-700 border-b-2 border-blue-700 dark:border-blue-600 dark:text-blue-600' : 'text-slate-700 font-medium dark:text-slate-300 dark:hover:border-b-slate-300 dark:hover:text-white hover:border-b-2 hover:border-b-slate-800 hover:text-black'"
                                class="h-min px-4 py-2 text-sm" type="button" role="tab"
                                aria-controls="tabpanelAccessories">
                            Accessory
                        </button>
                    </div>
                    <div class="px-2 py-4 text-slate-700 dark:text-slate-300">
                        <div x-show="selectedTab === 'products'" id="tabpanelProducts" role="tabpanel"
                             aria-label="products">
                            <livewire:products-table/>
                        </div>
                        <div x-show="selectedTab === 'accessories'" id="tabpanelAccessories" role="tabpanel"
                             aria-label="accessories">
                            <livewire:accessories-table/>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
