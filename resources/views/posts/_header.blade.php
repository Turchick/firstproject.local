<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        ПОСЛЕДНИЕ <span class="text-blue-500">НОВОСТИ</span> МИРА
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <!--  Категории -->
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
            <x-category-dropdown />
        </div>

        <!-- Other Filters -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">

        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET">
                @foreach(request()->except('search', 'page') as $name => $value)
                    <input type="hidden" name="{{ $name }}" value="{{ $value }}">
                @endforeach

                <input type="text"
                       name="search"
                       value="{{ request('search') }}"
                       placeholder="Поиск"
                       class="bg-transparent placeholder-black font-semibold text-sm"
                >
            </form>
        </div>
    </div>
</header>
