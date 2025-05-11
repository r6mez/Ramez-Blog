<nav>
    <div class="nav-container">
        <div>
            <a href="{{ route('home') }}">Home</a>
        </div>
        <div>
            @auth
                <span>{{ Auth::user()->name }}</span>
                <a href="{{ route('profile.edit') }}">Profile</a>
                <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                    @csrf
                    <button type="submit" class="button" style="margin-left:10px;">Log Out</button>
                </form>
            @else
                <a href="{{ route('login') }}">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    </div>
</nav>
