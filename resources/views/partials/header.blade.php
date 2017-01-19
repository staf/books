<section class="hero is-primary">

    <div class="hero-head">
        <header class="nav">
            <div class="container">
                <div class="nav-left">
                    <a class="nav-item">
                        <img src="images/bulma-type-white.png" alt="Logo">
                    </a>
                </div>
                <span class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <div class="nav-right nav-menu">
                    <a href="/" class="nav-item is-tab{{ request()->is('home') ? ' is-active' : '' }}">
                        Home
                    </a>
                    @if (Auth::guest())
                        <a href="{{ url('/login') }}" class="nav-item is-tab{{ request()->is('login') ? ' is-active' : '' }}">
                            Login
                        </a>
                        <a href="{{ url('/register') }}" class="nav-item is-tab{{ request()->is('register') ? ' is-active' : '' }}">
                            Register
                        </a>
                    @else
                        <a href="/my-list" class="nav-item is-tab{{ request()->is('my-list') ? ' is-active' : '' }}">
                            My List
                        </a>
                        <a href="/account" class="nav-item is-tab{{ request()->is('account') ? ' is-active' : '' }}">
                            Account
                        </a>
                        <a href="{{ url('/logout') }}" class="nav-item is-tab"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endif
                </div>
            </div>
        </header>
    </div>

    <!-- Hero content: will be in the middle -->
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title">
                Books!
            </h1>
            <h2 class="subtitle">
                Read them all.
            </h2>
        </div>
    </div>

</section>
