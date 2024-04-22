<div class="flex">
    <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">
        Search
    </label>
    <div class="relative">
        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
            class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
            type="button">
            Urut sesuai: @if (request('sort'))
            {{ ucwords(request('sort')) }}
            @endif
            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>
        <div id="dropdown"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'release date']) }}"
                        class="block px-4 py-2 hover:bg-primary-500 hover:text-white">
                        Waktu Rilis
                    </a>
                </li>
                <li>
                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'age rating']) }}"
                        class="block px-4 py-2 hover:bg-primary-500 hover:text-white">
                        Batasan Usia
                    </a>
                </li>
                <li>
                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'ticket price']) }}"
                        class="block px-4 py-2 hover:bg-primary-500 hover:text-white">
                        Harga Tiket
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>