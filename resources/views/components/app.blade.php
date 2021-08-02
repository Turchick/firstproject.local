<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale(LC_TIME, 'ru_RU.UTF-8')) }}">
<head>
    <title>FASTNEWS</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body style="font-family: Open Sans, sans-serif">


<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <img src="/images/logo.png" alt="Laracasts Logo" width="165" height="16">
            </a>
        </div>

        <div class="mt-8 md:mt-0 flex items-center">
            @auth
                <span class="text-xs font-bold uppercase">Привет, {{ auth()->user()->name }}!</span>

                <form method="POST" action="{{ route('logout') }}"
                      class="inline-flex ml-3"
                >
                    @csrf

                    <button type="submit" class="text-xs font-bold uppercase">Выйти</button>
                </form>
            @else
                <a href="{{ route('login.show') }}" class="text-xs font-bold uppercase mr-3">Войти</a>

                <a href="{{ route('register.show') }}" class="text-xs font-bold uppercase">Зарегистрироваться</a>
            @endauth


        </div>
    </nav>

    {{ $slot }}

    <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
        <img src="/images/bug-icon.png" alt="" class="mx-auto -mb-1" style="width: 120px;">
        <h5 class="text-3xl">Сайт в разработке, могут быть баги)</h5>

    </footer>

    <x-flash/>
</section>
</body>
</html>
