<head>

</head>
<body>
    <header>
        <div class='banner'><a href='/'>Neosys</a></div>
        <nav>
            <a href='/sources'>Sources</a> 
            | <a href='/pages'>Pages</a>
            |
            @guest  
                Login | Register
            @endguest
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
