<header>
    <div class="container">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="dc logo">
        </div>

        <nav>
            <ul>
                @foreach( $headerLinks as $link)
                <li>
                    <a href="#">{{ $link['text'] }}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>