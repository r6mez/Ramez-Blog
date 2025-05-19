<x-app-layout>
    <div class="home-container">
        <div class="home-left">
            <h1 class="home-name">
                @foreach(explode(' ', $owner->name) as $word)
                    <span class="home-name-word">{{ $word }}</span>
                @endforeach
            </h1>

            <div class="home-social-links">
            @foreach ($socials as $social)
                <a href="{{ $social->link }}" target="_blank" class="home-social-link">
                    <img src="{{ asset('storage/' . $social->icon) }}" class="home-social-icon" alt="{{ $social->name }}"/>
                </a>
            @endforeach
            </div>

            <button class="about-btn" href="{{ route('about') }}">
                About
                <svg class="about-btn-arrow" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24">
                    <path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
        <div class="home-right">
            <img src="/assets/planet.png" class="home-logo" />
        </div>
    </div>
</x-app-layout>
