<nav>
    <div class="nav-container">
        <div>
            <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                Ramez's Blog
            </x-nav-link>
        </div>
        <div>
            <x-nav-link href="#" :active="request()->routeIs('blog.*')">
                Blog
            </x-nav-link>
            @auth
                <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">Profile</x-nav-link>
                <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display:none;">
                    @csrf
                </form>
                <a href="#" class="anchor-logout" style="margin-left:10px;"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
            @else
                <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                    Login
                </x-nav-link>
                <x-nav-link :href="route('register')" :active="request()->routeIs('register')">Register</x-nav-link>
            @endauth
        </div>
    </div>
</nav>