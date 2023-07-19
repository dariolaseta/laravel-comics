<footer>
    <nav class="container">
            <div class="first-block">
                <div id="dc-comics">
                    <h2>DC COMICS</h2>
                    <ul>
                        @foreach($dcComics as $link)
                        <li>
                            <a href="#">{{$link["text"]}}</a>
                        </li>

                        @endforeach
                    </ul>
                </div>
    
                <div id="shop">
                    <h2>SHOP</h2>
                    <ul>
                        @foreach($shopLinks as $link)
                        <li>
                            <a href="#">{{$link["text"]}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="second-block">
                <div id="dc">
                    <h2>DC</h2>
                    <ul>
                        @foreach($dcLinks as $link)
                        <li>
                            <a href="#">{{$link["text"]}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
    
                <div id="sites">
                    <h2>SITES</h2>
                    <ul>
                        @foreach($sitesLinks as $link)
                        <li>
                            <a href="#">{{$link["text"]}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>

            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png')}}" alt="dc logo">
            </div>
    </nav>

    <div class="bottom-footer">
        <div class="container">
            <button>SIGN-UP NOW!</button>

            <div class="socials">
                <ul>
                    <li><a href="#">FOLLOW US</a></li>
                    <li><a href="#"><img src="{{ Vite::asset('resources/img/footer-facebook.png')}}" alt="facebook logo"></a></li>
                    <li><a href="#"><img src="{{ Vite::asset('resources/img/footer-twitter.png')}}" alt="twitter logo"></a></li>
                    <li><a href="#"><img src="{{ Vite::asset('resources/img/footer-youtube.png')}}" alt="youtube logo"></a></li>
                    <li><a href="#"><img src="{{ Vite::asset('resources/img/footer-pinterest.png')}}" alt="pinterest logo"></a></li>
                    <li><a href="#"><img src="{{ Vite::asset('resources/img/footer-periscope.png')}}" alt="periscope logo"></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="bottom-bar"></div>
</footer>