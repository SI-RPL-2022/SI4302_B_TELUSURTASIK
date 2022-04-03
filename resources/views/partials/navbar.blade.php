    
    <!-- MENU -->
        <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">
             <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                    </button>

                  <!-- lOGO TEXT HERE -->
                  <a href="/" class="navbar-brand"><img src="images/logo.png" alt=""></a>
             </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="/" class="smoothScroll">Home</a></li>
                    <li><a href="/wisata" class="smoothScroll">Wisata</a></li>
                    <li><a href="/about" class="smoothScroll">About</a></li>
                    <li><a href="/help" class="smoothScroll">Help</a></li>
                    {{-- <li><a href="/login" class="navbar-">Login</a></li>
                    <li><button style="background-color: #7AC678;"><a href="/register" class="navbar-">Register</a></li></button> --}}
                </ul>
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                @endguest
            </div>
</div>
</section>
