<nav>
    <div class="nav-container">
        <div>
            <a href="{{ route('home') }}">Home</a>
            <a>Blog</a>
        </div>
        <div>
            @auth
                <a href="{{ route('profile.edit') }}">{{ Auth::user()->name }}</a>
                <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display:none;">
                    @csrf
                </form>
                <a href="#" class="anchor-logout" style="margin-left:10px;"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
            @else
                <a href="{{ route('login') }}">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    </div>
</nav>
