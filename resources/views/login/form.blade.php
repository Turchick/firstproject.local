<x-app>
    <main class="max-w-6xl mx-auto mt-6 px-auto lg:mt-20 space-y-6" style="max-width: 230px">
        <div>
            <form method="POST" action="{{ route('login.attempt') }}">
                @csrf

                <x-input-errors/>

                <input class="block border border-gray-1 mt-3 p-3"
                       placeholder="email"
                       name="email"
                       id="email"
                       value="{{ old('email') }}"
                       type="email"
                       required
                >

                <input class="block border border-gray-1 mt-3 p-3"
                       placeholder="Пароль"
                       name="password"
                       id="password"
                       type="password"
                       required
                >

                <button type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mt-3"
                >
                    Войти
                </button>
            </form>
        </div>
    </main>
</x-app>
