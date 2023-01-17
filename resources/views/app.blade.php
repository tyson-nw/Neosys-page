<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <header>
        <div class='banner'><a href='/'>Neosys</a></div>
        <nav>
            <a href='/sources'>Sources</a>
            | <a href='/pages'>Pages</a>
            |
            @guest
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> | >            @endguest
            @auth
                Profile
                <form method="POST" action="/logout"> @csrf <button type='submit'>Logout</button></form>
            @endauth
        </nav>
    </header>
    <main>
        @yield('main')
    </main>
    <footer>
        @if(empty($license))
            Copyright Double Crescent
        @else
            {{ $license }}
        @endif
    </footer>
</body>
</html>